<?php
namespace DigitalAp\FcmHttpBundle\Entity;

use DigitalAp\FcmHttpBundle\Model\FCM;
use Doctrine\Common\Collections\ArrayCollection;

class Message
{
    //Targets
    private $registration_ids;
    private $condition;

    //Options
    private $collapse_key;
    private $priority;
    private $content_available;
    private $delay_while_idle;
    private $time_to_live;
    private $restricted_package_name;
    private $dry_run;
    private $notification;
    private $data;

    public function __construct(array $registration_ids)
    {
        $this->registration_ids = $registration_ids;
        $this->priority = FCM::MESSAGE_PRIORITY_NORMAL;
        $this->data = new ArrayCollection();
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
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param mixed $condition
     * @return Message
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCollapse_key()
    {
        return $this->collapse_key;
    }

    /**
     * @param mixed $collapse_key
     * @return Message
     */
    public function setCollapse_key($collapse_key)
    {
        $this->collapse_key = $collapse_key;

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
     * @return mixed
     */
    public function getContent_available()
    {
        return $this->content_available;
    }

    /**
     * @param mixed $content_available
     * @return Message
     */
    public function setContent_available($content_available)
    {
        $this->content_available = $content_available;

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
     * @return Message
     */
    public function setDelay_while_idle($delay_while_idle)
    {
        $this->delay_while_idle = $delay_while_idle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTime_to_live()
    {
        return $this->time_to_live;
    }

    /**
     * @param mixed $time_to_live
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
    public function getRestricted_package_name()
    {
        return $this->restricted_package_name;
    }

    /**
     * @param mixed $restricted_package_name
     * @return Message
     */
    public function setRestricted_package_name($restricted_package_name)
    {
        $this->restricted_package_name = $restricted_package_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDry_run()
    {
        return $this->dry_run;
    }

    /**
     * @param mixed $dry_run
     * @return Message
     */
    public function setDry_run($dry_run)
    {
        $this->dry_run = $dry_run;

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
     * @return ArrayCollection
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param ArrayCollection $data
     * @return Message
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
