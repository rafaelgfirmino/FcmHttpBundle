<?php
namespace DigitalAp\FcmHttpBundle\Entity;

use DigitalAp\FcmHttpBundle\Model\FCM;

class Notification
{
    private $body;
    private $title;
    private $icon;
    private $sound;
    private $badge;
    private $tag;
    private $color;
    private $click_action;
    private $body_loc_key;
    private $body_loc_args;
    private $title_loc_key;
    private $title_loc_args;

    public function __construct($title, $body = null)
    {
        $this->title = $title;
        $this->body = $body;
        $this->icon = "Default";
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     * @return Notification
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Notification
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return Notification
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isSound()
    {
        return $this->sound;
    }


    public function enableSound(){

        $this->sound = true;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param mixed $badge
     * @return Notification
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     * @return Notification
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Notification
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClick_action()
    {
        return $this->click_action;
    }

    /**
     * @param mixed $click_action
     * @return Notification
     */
    public function setClick_action($click_action)
    {
        $this->click_action = $click_action;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody_loc_key()
    {
        return $this->body_loc_key;
    }

    /**
     * @param mixed $body_loc_key
     * @return Notification
     */
    public function setBody_loc_key($body_loc_key)
    {
        $this->body_loc_key = $body_loc_key;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody_loc_args()
    {
        return $this->body_loc_args;
    }

    /**
     * @param mixed $body_loc_args
     * @return Notification
     */
    public function setBody_loc_args($body_loc_args)
    {
        $this->body_loc_args = $body_loc_args;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle_loc_key()
    {
        return $this->title_loc_key;
    }

    /**
     * @param mixed $title_loc_key
     * @return Notification
     */
    public function setTitle_loc_key($title_loc_key)
    {
        $this->title_loc_key = $title_loc_key;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle_loc_args()
    {
        return $this->title_loc_args;
    }

    /**
     * @param mixed $title_loc_args
     * @return Notification
     */
    public function setTitle_loc_args($title_loc_args)
    {
        $this->title_loc_args = $title_loc_args;

        return $this;
    }


}