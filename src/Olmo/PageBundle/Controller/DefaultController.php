<?php

namespace Olmo\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OlmoPageBundle:Default:index.html.twig', array());
    }
}
