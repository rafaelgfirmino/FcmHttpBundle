<?php

namespace DigitalAp\FcmHttpBundle\Entity;


use DigitalAp\FcmHttpBundle\Model\FCM;

class Message
{
    private $registration_ids;
    private $priority;
    private $time_to_live;
    private $notification;
    private $data;

    public function __construct(array $registration_ids)
    {
        $this->registration_ids = $registration_ids;
        $this->priority = FCM::MESSAGE_PRIORITY_NORMAL;
        $this->time_to_live = null;
        $this->data = array();
    }

    /**
     * @return array
     */
    public function getRegistration_ids()
    {
        return $this->registration_ids;
    }

    /**
     * @param array $registration_ids
     * @return Message
     */
    public function setRegistration_ids($registration_ids)
    {
        $this->registration_ids = $registration_ids;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     * @return Message
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return null
     */
    public function getTime_to_live()
    {
        return $this->time_to_live;
    }

    /**
     * @param null $time_to_live
     * @return Message
     */
    public function setTime_to_live($time_to_live)
    {
        $this->time_to_live = $time_to_live;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param mixed $notification
     * @return Message
     */
    public function setNotification(Notification $notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return Message
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

}
