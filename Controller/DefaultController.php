<?php

namespace DigitalAp\FcmHttpBundle\Controller;

use DigitalAp\FcmHttpBundle\Entity\Message;
use DigitalAp\FcmHttpBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $notification = new Notification('teste', 'body');
        $message = (new Message(
            [
                'edPb6zQrnLA:APA91bGbQxlvclKzAX8-8xzSu8ulDMI4ZQwqK_DBQlTT2RMU9RKa7YHWlSD-Gev8GnBVFQPWnwhl5I9ErLw5gphRfbRniYx7OXXNFgyG3HPTq6oSJGBu-LdPHEfkQ30DH_fLA_ocffxH'
            ]
        ))->setNotification($notification);

        $this->get('fcm_http.send')->send($message);

        return $this->render('FcmHttpBundle:Default:index.html.twig');
    }
}
