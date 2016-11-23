<?php

namespace DigitalAp\FcmHttpBundle\Services;

use DigitalAp\FcmHttpBundle\Entity\Message;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class FcmSend
{
    private $serializer;

    public function __construct()
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function send(Message $message)
    {
        return $this->serializer->serialize(
            $message,
            'json'
        );
    }
}