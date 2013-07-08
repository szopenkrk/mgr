<?php
namespace My\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use My\WorkBundle\Entity\Review;

class ReviewController extends Controller
{
    /**
     * @Route(pattern="/work/{id}",name="review_work")
     * @Template()
     */
    public function workAction($id) {
        $work = $this->getDoctrine()
            ->getEntityManagerForClass('MyWorkBundle:Work')
            ->getRepository('MyWorkBundle:Work')
            ->find($id);
        return array('work' => $work);

    }
    /**
     * @Route(pattern="/work/{id}",name="work_new")
     * @Template()
     */
    public function addreviewAction(Request $request)
    {
        $defaultData = array(
            'username' => 'Foo'
        );
        $form = $this->createFormBuilder($defaultData)
            ->add('WorkWork', 'text')
            ->add('DateReview', 'date')
            ->getForm();

    }

   /* public function rewievAction($id){
        $form = $this->createFormBuilder()
        ->add('WorkWork', 'text')
        ->add('DateReview', 'date')
        ->getForm();
        return $form;
    }*/
/*
    public function rewievAction(){
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

                return $this->redirect($this->generateUrl("url_panel"));
            }
        }

        return array('form' => $form->createView());
    }*/
}
