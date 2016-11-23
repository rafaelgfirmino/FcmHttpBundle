<?php

namespace DigitalAp\FcmHttpBundle\Entity;


use DigitalAp\FcmHttpBundle\Model\FCM;
use Doctrine\Common\Collections\ArrayCollection;

class Message
{
    private $priority;
    private $time_to_live;
    private $delay_while_idle;
    private $to;
    private $registration_ids;
    private $notification;
    private $data;

    public function __construct(array $registration_ids)
    {
        $this->registration_ids = $registration_ids;
        if (count($registration_ids) == 1) {
            $this->to = $registration_ids[0];
            $this->registration_ids = null;
        }
        $this->priority = FCM::MESSAGE_PRIORITY_NORMAL;
        $this->data = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
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

    /**
     * @return mixed
     */
    public function getDelay_while_idle()
    {
        return $this->delay_while_idle;
    }

    /**
     * @param mixed $delay_while_idle
     */
    public function setDelay_while_idle($delay_while_idle)
    {
        $this->delay_while_idle = $delay_while_idle;
    }

}
