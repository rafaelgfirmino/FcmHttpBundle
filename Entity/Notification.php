<?php
namespace DigitalAp\FcmHttpBundle\Entity;


class Notification
{
    /**
     * Indicates notification title. This field is not visible on iOS phones and tablets.
     * @var string $title
     */
    private $title;

    /**
     * Indicates notification body text.
     * @var string
     */
    private $body;

    /**
     * Indicates notification icon. Sets value to myicon for drawable resource myicon.
     * If you don't send this key in the request, FCM displays the launcher icon specified in your app manifest.
     *
     * @var string
     */
    private $icon;

    /**
     * Indicates a sound to play when the device receives a notification. Sound files can be in the main bundle
     * of the client app or in the Library/Sounds folder of the app's data container.
     * See the iOS Developer Library for more information.
     *
     * @var boolean $sound
     */
    private $sound;

    /**
     * Indicates whether each notification results in a new entry in the notification drawer on Android.
     * If not set, each request creates a new notification.
     * If set, and a notification with the same tag is already being shown, the new notification replaces
     * the existing one in the notification drawer.
     *
     * @var string $tag
     */
    private $tag;

    /**
     * Indicates color of the icon, expressed in #rrggbb format
     *
     * @var string $color (use hexadecimal)
     */
    private $color;

    /**
     * Indicates the badge on the client app home icon.
     *
     * @var string $badge
     */
    private $badge;

    /**
     * Indicates the action associated with a user click on the notification.
     * Corresponds to category in the APNs payload.
     *
     * @var string $click_action
     */
    private $click_action;

    /**
     * Indicates the key to the body string for localization. Use the key in the app's string resources
     * when populating this value.
     *
     * @var string $body_loc_key
     */
    private $body_loc_key;

    /**
     * Indicates the string value to replace format specifiers in the body string for localization.
     * For more information, see Formatting and Styling.
     *
     * @var string|array $body_loc_args
     */
    private $body_loc_args;

    /**
     * Indicates the key to the title string for localization. Use the key in the app's string resources
     * when populating this value.
     *
     * @var string $title_loc_key
     */
    private $title_loc_key;

    /**
     * Indicates the string value to replace format specifiers in the title string for localization.
     * For more information, see Formatting strings.
     *
     * @var string|array
     */
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


    public function enableSound()
    {

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
