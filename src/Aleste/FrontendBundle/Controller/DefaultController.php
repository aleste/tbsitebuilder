<?php

namespace Aleste\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
    	
    	$em = $this->getDoctrine()->getManager();        
        $site = $em->getRepository( 'SiteBuilderBundle:Site' )->find(1); //Retrieve Site Data
        $pages = $em->getRepository( 'SiteBuilderBundle:Page' )->findAll(); //Retrieve Site Pages

        return array('site' => $site,
                    'pages' => $pages);
    }
}
