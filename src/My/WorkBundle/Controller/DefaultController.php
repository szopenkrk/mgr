<?php

namespace My\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

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
        return array();
    }
    /**
     * @Route("/editor.html", name="url_editor")
     * @Template()
     */
    public function editorAction()
    {
        return array();
    }
    /**
     * @Route("/rewiever.html", name="url_rewiever")
     * @Template()
     */
    public function rewieverAction()
    {
        return array();
    }
    /**
     * @Route("/users.html", name="url_users")
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

        $form = $this->createFormBuilder($contentWork)
            ->add('contentWork', 'text')
            ->add('workDate', 'date')
            ->getForm();

        return $this->render('MyWorkBundle:Default:work.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    
}
