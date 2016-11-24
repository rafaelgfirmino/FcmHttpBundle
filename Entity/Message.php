<?php
namespace DigitalAp\FcmHttpBundle\Entity;

use DigitalAp\FcmHttpBundle\Model\FCM;
use Doctrine\Common\Collections\ArrayCollection;

class Message
{
    //Targets

    /**
     * This parameter specifies a list of devices (registration tokens, or IDs) receiving a multicast message.
     * It must contain at least 1 and at most 1000 registration tokens.
     *
     * Use this parameter only for multicast messaging, not for single recipients.
     * Multicast messages (sending to more than 1 registration tokens) are allowed using HTTP JSON format only.
     *
     * @var array $registration_ids
     */
    private $registration_ids;

    /**
     * This parameter specifies a logical expression of conditions that determine the message target.
     *
     * Supported condition: Topic, formatted as "'yourTopic' in topics". This value is case-insensitive.
     *
     * Supported operators: &&, ||. Maximum two operators per topic message supported.
     *
     * @var string $condition
     */
    private $condition;

    //Options
    /**
     * This parameter identifies a group of messages (e.g., with collapse_key: "Updates Available")
     * that can be collapsed, so that only the last message gets sent when delivery can be resumed. This is intended
     * to avoid sending too many of the same messages when the device comes back online or becomes active.
     *
     * Note that there is no guarantee of the order in which messages get sent.
     *
     * Note: A maximum of 4 different collapse keys is allowed at any given time. This means a FCM connection server
     * can simultaneously store 4 different send-to-sync messages per client app. If you exceed this number, there is
     * no guarantee which 4 collapse keys the FCM connection server will keep.
     *
     * @var string $collapse_key
     */
    private $collapse_key;

    /**
     * Sets the priority of the message. Valid values are "normal" and "high." On iOS, these correspond to APNs
     * priorities 5 and 10. By default, messages are sent with normal priority. Normal priority optimizes the client
     * app's battery consumption and should be used unless immediate delivery is required.
     * For messages with normal priority, the app may receive the message with unspecified delay.
     *
     * When a message is sent with high priority, it is sent immediately, and the app can wake a sleeping device and
     * open a network connection to your server.
     *
     * For more information, see Setting the priority of a message.
     *
     * @var string $priority
     */
    private $priority;

    /**
     *
     * On iOS, use this field to represent content-available in the APNs payload. When a notification or message
     * is sent and this is set to true, an inactive client app is awoken. On Android, data messages wake the app by
     * default. On Chrome, currently not supported.
     *
     * @var boolean $content_available
     */
    private $content_available;

    /**
     *
     * This parameter is deprecated. After Nov 15th 2016, it will be accepted by FCM, but ignored.
     * When this parameter is set to true, it indicates that the message should not be sent until the device
     * becomes active.
     *
     * The default value is false.
     *
     * @var boolean $delay_while_idle
     */
    private $delay_while_idle;

    /**
     * his parameter specifies how long (in seconds) the message should be kept in FCM storage if the device is offline.
     * The maximum time to live supported is 4 weeks, and the default value is 4 weeks. For more information,
     * see Setting the lifespan of a message.
     *
     * @var integer $time_to_live (in seconds)
     */
    private $time_to_live;

    /**
     * This parameter specifies the package name of the application where the registration tokens must
     * match in order to receive the message.
     *
     * @var string $restricted_package_name
     */
    private $restricted_package_name;

    /**
     *
     * This parameter, when set to true, allows developers to test a request without actually sending a message.
     * The default value is false.
     *
     * @var boolean $dry_run
     */
    private $dry_run;

    // Payload
    /**
     * This parameter specifies the predefined, user-visible key-value pairs of the notification payload.
     * See Notification payload support for detail.
     * For more information about notification message and data message options, see
     * @link [https://firebase.google.com/docs/cloud-messaging/concept-options#notifications_and_data_messages] [Payload].
     *
     * @var Notification $notification
     */
    private $notification;
    /**
     * This parameter specifies the custom key-value pairs of the message's payload.
     * For example, with data:{"score":"3x1"}: On iOS, if the message is sent via APNS, it represents the custom
     * data fields. If it is sent via FCM connection server, it would be represented as key value dictionary in
     * AppDelegate application:didReceiveRemoteNotification:.
     *
     * On Android, this would result in an intent extra named score with the string value 3x1.
     *
     * The key should not be a reserved word ("from" or any word starting with "google" or "gcm").
     * Do not use any of the words defined in this table (such as collapse_key).
     *
     *
     * Values in string types are recommended. You have to convert values in objects or other non-string
     * data types (e.g., integers or booleans) to string.
     *
     * @var ArrayCollection
     */
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
     *
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
     * @param $content_available
     * @return $this
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
