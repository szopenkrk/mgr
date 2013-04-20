<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keywords
 *
 * @ORM\Table(name="keywords")
 * @ORM\Entity
 */
class Keywords
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_keywords", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKeywords;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     */
    private $idWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work_version", type="integer", nullable=false)
     */
    private $idWorkVersion;

    /**
     * @var integer
     *
     * @ORM\Column(name="title", type="integer", nullable=false)
     */
    private $title;



    /**
     * Get idKeywords
     *
     * @return integer 
     */
    public function getIdKeywords()
    {
        return $this->idKeywords;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return Keywords
     */
    public function setIdWork($idWork)
    {
        $this->idWork = $idWork;
    
        return $this;
    }

    /**
     * Get idWork
     *
     * @return integer 
     */
    public function getIdWork()
    {
        return $this->idWork;
    }

    /**
     * Set idWorkVersion
     *
     * @param integer $idWorkVersion
     * @return Keywords
     */
    public function setIdWorkVersion($idWorkVersion)
    {
        $this->idWorkVersion = $idWorkVersion;
    
        return $this;
    }

    /**
     * Get idWorkVersion
     *
     * @return integer 
     */
    public function getIdWorkVersion()
    {
        return $this->idWorkVersion;
    }

    /**
     * Set title
     *
     * @param integer $title
     * @return Keywords
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return integer 
     */
    public function getTitle()
    {
        return $this->title;
    }
}