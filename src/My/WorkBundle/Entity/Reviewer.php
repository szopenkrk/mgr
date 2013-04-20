<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reviewer
 *
 * @ORM\Table(name="reviewer")
 * @ORM\Entity
 */
class Reviewer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reviewer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReviewer;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_areaofinterest", type="integer", nullable=false)
     */
    private $idAreaofinterest;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_e-reviewer", type="integer", nullable=false)
     */
    private $idEReviewer;



    /**
     * Get idReviewer
     *
     * @return integer 
     */
    public function getIdReviewer()
    {
        return $this->idReviewer;
    }

    /**
     * Set idAreaofinterest
     *
     * @param integer $idAreaofinterest
     * @return Reviewer
     */
    public function setIdAreaofinterest($idAreaofinterest)
    {
        $this->idAreaofinterest = $idAreaofinterest;
    
        return $this;
    }

    /**
     * Get idAreaofinterest
     *
     * @return integer 
     */
    public function getIdAreaofinterest()
    {
        return $this->idAreaofinterest;
    }

    /**
     * Set idEReviewer
     *
     * @param integer $idEReviewer
     * @return Reviewer
     */
    public function setIdEReviewer($idEReviewer)
    {
        $this->idEReviewer = $idEReviewer;
    
        return $this;
    }

    /**
     * Get idEReviewer
     *
     * @return integer 
     */
    public function getIdEReviewer()
    {
        return $this->idEReviewer;
    }
}