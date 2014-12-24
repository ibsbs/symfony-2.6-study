<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/hello/{name}.{_formatxx}", defaults={"_formatxx"="html"}, name="hello")
     */
    public function helloAction($name, $_formatxx)
    {
        //echo 'ok';
        //return ;
        return $this->render('default/hello.' . $_formatxx . '.twig', array('name'=>$name));
    }

}
