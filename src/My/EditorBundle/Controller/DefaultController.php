<?php

namespace My\EditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/editor")
     * @Template()
     */
   /* public function indexAction()
    {

        /**
         * @Route("/editor2.html", name="url_editor2")
         * @Template()
         *//*
        public function editorAction(){

        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getReposytory('MyWorkBundle:Work')->findAll();

        return array('entities' => $entities);
        }
    }*/
}
