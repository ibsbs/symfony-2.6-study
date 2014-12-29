<?php

namespace Ibw\JobeetBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IbwJobeetBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/jobeet/test/")
     */
    public function testAction()
    {
        $request = $this->getRequest();
        ladybug_dump($request);
//        $dumper = new \Ladybug\Dumper();
//        $dumper->setFormat('json');
//        $json = $dumper->dump('1');
//        var_dump($json);
        $response = new Response('hello world!');
        return $response;
    }
}