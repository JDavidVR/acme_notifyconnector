<?php

namespace Acme\Bundle\NotifyConnectorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeNotifyConnectorBundle:Default:index.html.twig');
    }
}
