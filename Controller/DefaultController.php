<?php

namespace DigitalAp\FcmHttpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FcmHttpBundle:Default:index.html.twig');
    }
}
