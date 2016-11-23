<?php
namespace DigitalAp\FcmHttpBundle\Entity;

use DigitalAp\FcmHttpBundle\Model\FCM;

class Notification
{
    private $body;
    private $title;
    private $icon;

    public function __construct($title, $body, $icon = "Default")
    {
        $this->title = $title;
        $this->body = $body;
        $this->icon = $icon;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

}