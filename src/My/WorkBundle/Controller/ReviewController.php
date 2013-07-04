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
}
