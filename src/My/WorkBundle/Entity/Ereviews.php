<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ereviews
 *
 * @ORM\Table(name="ereviews")
 * @ORM\Entity
 */
class Ereviews
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ereviews", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEreviews;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_person", type="integer", nullable=false)
     */
    private $idPerson;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_review", type="integer", nullable=false)
     */
    private $idReview;



    /**
     * Get idEreviews
     *
     * @return integer 
     */
    public function getIdEreviews()
    {
        return $this->idEreviews;
    }

    /**
     * Set idPerson
     *
     * @param integer $idPerson
     * @return Ereviews
     */
    public function setIdPerson($idPerson)
    {
        $this->idPerson = $idPerson;
    
        return $this;
    }

    /**
     * Get idPerson
     *
     * @return integer 
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }

    /**
     * Set idReview
     *
     * @param integer $idReview
     * @return Ereviews
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