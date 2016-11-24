<?php
namespace DigitalAp\FcmHttpBundle\Services;

use DigitalAp\FcmHttpBundle\Entity\Message;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use GuzzleHttp\Client;

class FcmSend
{

    private $serializer;
    private $client;
    private $autentication_api_key;
    private $fcm_api_url;

    public function __construct(Client $client, $autentication_api_key, $fcm_api_url)
    {
        $this->client = $client;
        $this->fcm_api_url = $fcm_api_url;
        $this->autentication_api_key = $autentication_api_key;
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function send(Message $message)
    {
        $registrationsIds = array_chunk($message->getRegistration_ids(), 1000);
        $response = array();

        foreach ($registrationsIds as $thousandFirstRegistration_ids) {
            $messageJson = $this->transformInMessage($message, $thousandFirstRegistration_ids);
            $response[] = $this->client->post($this->fcm_api_url, $messageJson);
        }

        return $response;
    }

    private function transformInMessage(Message $message, $registrationsIdsJson)
    {
        $message->setRegistration_ids($registrationsIdsJson);
        $messageJson = $this->serializer->serialize(
            $message,
            'json'
        );

        $messageJson = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?|,"[^"]+":\[\]|"[^"]+":\[\],?/', '', $messageJson);
        $FCMjson = [
            'headers' => [
                'Authorization' => sprintf('key=%s', $this->autentication_api_key),
                'Content-Type' => 'application/json'
            ],
            'body' => $messageJson
        ];

        return $FCMjson;
    }

}