<?php

namespace DigitalAp\FcmHttpBundle\Controller;

use DigitalAp\FcmHttpBundle\Entity\Message;
use DigitalAp\FcmHttpBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $notification = new Notification('teste','body');
        $message = (new Message(['1','2','3','4']))->setNotification($notification);
        dump($this->get('fcm_http.send')->send($message));

        return $this->render('FcmHttpBundle:Default:index.html.twig');
    }
}
