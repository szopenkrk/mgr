<?php

namespace My\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use My\WorkBundle\Entity\Review;
use My\WorkBundle\Entity\Work;
use My\WorkBundle\Entity\Conference;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/panel.html", name="url_panel")
     * @Template()
     */
    public function panelAction()
    {
        return array();
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
    /**
     * @Route("/editor.html", name="url_editor")
     * @Template()
     */
    public function editorAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('MyWorkBundle:Work')->findAll();

        return array('entities' => $entities);

    }

    /**
     * @Route("/rewiever.html", name="url_rewiever")
     * @Template()
     */
    public function rewieverAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('MyWorkBundle:Work')->findAll();

        return array('entities' => $entities);
    }
    /**
     * @Route("users.html", name="url_users")
     * @Template()
     */
    public function usersAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('MyWorkBundle:User')->findAll();
        return array('entities' => $entities);

    }
    /**
     * @Route("/work.html", name="url_work")
     * @Template()
     */
    public function workAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('MyWorkBundle:Work')->findAll();
        return array('entities' => $entities);
    }

    public function formAction(Request $request)
    {
        $work = new Work();
        $work->setContentWork('Zawartość pracy');
        $work->getWorkDate(new \DateTime('tomorrow'));

        $form = $this->_createForm($work);

        return $this->render('MyWorkBundle:Default:work.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @param $contentWork
     * @return \Symfony\Component\Form\Form
     */
    private function _createForm($contentWork = null)
    {
        $form = $this->createFormBuilder($contentWork)
            ->add('contentWork', 'text')
            ->add('workDate', 'date')
            ->getForm();
        return $form;
    }


    /**
     * @Route("/panelreview.html", name="url_panelreview")
     * @Template()
     */
        public function panelreviewAction(){
            $document = new Review();
            $form = $this->createFormBuilder($document)
            ->add('WorkWork', 'text')
            ->add('DateReview', 'date')
            ->getForm();

            if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($document);
            $em->flush();

            return $this->redirect($this->generateUrl("url_panelreview"));
            }
            }

            return array('form' => $form->createView());
        }

    /**
     * @Route("/conference.html", name="url_conference")
     * @Template()
     */
    public function conferenceAction(){
        return array();
    }

    /**
     * @Route("/addconference.html", name="url_addconference")
     * @Template()
     */
    public function addconferenceAction(){
        $document = new Conference();
        $form = $this->createFormBuilder($document)
            ->add('titleConference', 'text')
            ->add('placeConference', 'text')
            ->add('dateConference', 'date')
            ->getForm();

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                return $this->redirect($this->generateUrl("url_addconference"));
            }
        }

        return array('form' => $form->createView());
    }
    /**
     * @Route("/listconference.html", name="url_listconference")
     * @Template()
     */
    public function listconferenceAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('MyWorkBundle:Conference')->findAll();

        return array('entities' => $entities);
    }
}

