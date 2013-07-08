<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreaOfInterest
 *
 * @ORM\Table(name="area_of_interest")
 * @ORM\Entity
 */
class AreaOfInterest
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_areaofintrest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAreaofintrest;

    /**
     * @var string
     *
     * @ORM\Column(name="content_areaofintrest", type="text", nullable=false)
     */
    private $contentAreaofintrest;


    protected $User;



    protected  $Work;



    /**
     * Get idAreaofintrest
     *
     * @return integer 
     */
    public function getIdAreaofintrest()
    {
        return $this->idAreaofintrest;
    }

    /**
     * Set contentAreaofintrest
     *
     * @param string $contentAreaofintrest
     * @return AreaOfInterest
     */
    public function setContentAreaofintrest($contentAreaofintrest)
    {
        $this->contentAreaofintrest = $contentAreaofintrest;
    
        return $this;
    }

    /**
     * Get contentAreaofintrest
     *
     * @return string 
     */
    public function getContentAreaofintrest()
    {
        return $this->contentAreaofintrest;
    }

}