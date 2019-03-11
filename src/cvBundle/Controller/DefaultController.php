<?php

namespace cvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('cvBundle:Default:index.html.twig');
    }
}
