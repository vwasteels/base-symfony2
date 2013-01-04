<?php

namespace Tractr\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TractrFormBundle:Default:index.html.twig', array('name' => '$name'));
    }
}
