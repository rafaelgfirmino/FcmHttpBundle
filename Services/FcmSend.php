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
    private $api_key;

    public function __construct(Client $client, $api_key)
    {
        $this->client = $client;
        $this->api_key = $api_key;
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function send(Message $message)
    {
        $messageJson = $this->serializer->serialize(
            $message,
            'json'
        );
        $messageJson = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?|,"[^"]+":\[\]|"[^"]+":\[\],?/', '', $messageJson);

        $rest = [
            'headers' => [
                'Authorization' => sprintf('key=%s', $this->api_key),
                'Content-Type' => 'application/json'
            ],
            'body' => $messageJson
        ];
        $response = $this->client->post('https://fcm.googleapis.com/fcm/send',$rest);

        return $response->getStatusCode();

    }

}