<?php

namespace My\AutorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    /**
     * @Route("/autor.html", name="url_autor")
     * @Template()
     */
    public function autorAction()
    {
        $document = new Work();
        $form = $this->createFormBuilder($document)
            ->add('contentWork', 'text')
            ->add('workDate', 'date')
            ->add('title')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                return $this->redirect($this->generateUrl("url_autor"));
            }
        }

        return array('form' => $form->createView());
    }
}
