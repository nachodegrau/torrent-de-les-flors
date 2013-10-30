<?php

namespace Studio\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('StudioHomeBundle:Default:index.html.twig');
    }
}
