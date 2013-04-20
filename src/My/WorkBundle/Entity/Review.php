<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity
 */
class Review
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_review", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReview;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_review", type="date", nullable=false)
     */
    private $dateReview;

    /**
     * @var string
     *
     * @ORM\Column(name="work_work", type="text", nullable=false)
     */
    private $workWork;



    /**
     * Get idReview
     *
     * @return integer 
     */
    public function getIdReview()
    {
        return $this->idReview;
    }

    /**
     * Set dateReview
     *
     * @param \DateTime $dateReview
     * @return Review
     */
    public function setDateReview($dateReview)
    {
        $this->dateReview = $dateReview;
    
        return $this;
    }

    /**
     * Get dateReview
     *
     * @return \DateTime 
     */
    public function getDateReview()
    {
        return $this->dateReview;
    }

    /**
     * Set workWork
     *
     * @param string $workWork
     * @return Review
     */
    public function setWorkWork($workWork)
    {
        $this->workWork = $workWork;
    
        return $this;
    }

    /**
     * Get workWork
     *
     * @return string 
     */
    public function getWorkWork()
    {
        return $this->workWork;
    }
}