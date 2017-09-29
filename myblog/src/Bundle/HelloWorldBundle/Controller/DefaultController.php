<?php

namespace Bundle\HelloWorldBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bundle\HelloWorldBundle\Entity\Post;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	$request = $this->getRequest();
    	$url = $request->getPathInfo();
    	$repository = $this->getDoctrine()
    	->getRepository('BundleHelloWorldBundle:Post');
    	$product = $repository->findOneById(1)->getName();

    	return $this->render('BundleHelloWorldBundle:Default:index.html.twig', array('name' => $name,'log'=>$product));
    }
}
