<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReviewEditor
 *
 * @ORM\Table(name="review_editor")
 * @ORM\Entity
 */
class ReviewEditor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_revieweditor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRevieweditor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="send", type="boolean", nullable=false)
     */
    private $send;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inreview", type="boolean", nullable=false)
     */
    private $inreview;

    /**
     * @var boolean
     *
     * @ORM\Column(name="finished", type="boolean", nullable=false)
     */
    private $finished;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_review", type="integer", nullable=false)
     */
    private $idReview;



    /**
     * Get idRevieweditor
     *
     * @return integer 
     */
    public function getIdRevieweditor()
    {
        return $this->idRevieweditor;
    }

    /**
     * Set send
     *
     * @param boolean $send
     * @return ReviewEditor
     */
    public function setSend($send)
    {
        $this->send = $send;
    
        return $this;
    }

    /**
     * Get send
     *
     * @return boolean 
     */
    public function getSend()
    {
        return $this->send;
    }

    /**
     * Set inreview
     *
     * @param boolean $inreview
     * @return ReviewEditor
     */
    public function setInreview($inreview)
    {
        $this->inreview = $inreview;
    
        return $this;
    }

    /**
     * Get inreview
     *
     * @return boolean 
     */
    public function getInreview()
    {
        return $this->inreview;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     * @return ReviewEditor
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;
    
        return $this;
    }

    /**
     * Get finished
     *
     * @return boolean 
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set idReview
     *
     * @param integer $idReview
     * @return ReviewEditor
     */
    public function setIdReview($idReview)
    {
        $this->idReview = $idReview;
    
        return $this;
    }

    /**
     * Get idReview
     *
     * @return integer 
     */
    public function getIdReview()
    {
        return $this->idReview;
    }
}