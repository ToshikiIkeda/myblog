<?php

namespace Bundle\HelloWorldBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bundle\HelloWorldBundle\Entity\Post;


class DefaultController extends Controller
{
    public function indexAction()
    {
    	$request = $this->getRequest();
    	$url = $request->getPathInfo();
    	$repository = $this->getDoctrine()
    	->getRepository('BundleHelloWorldBundle:Post');

    	for ($i = 1; $i <= 3; $i++) {
    		$id[$i] = $repository->findOneById($i)->getId();
    		$name[$i] = $repository->findOneById($i)->getName();
    	}

    	//$product[] = $repository->findOneById(1)->getName();

    	return $this->render('BundleHelloWorldBundle:Default:index.html.twig', array('id'=>$id,'name'=>$name));
    }
}
