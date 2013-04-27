<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Work
 *
 * @ORM\Table(name="work")
 * @ORM\Entity
 */
class Work
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWork;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="work_date", type="date", nullable=false)
     */
    private $workDate;

    /**
     * @var string
     *
     * @ORM\Column(name="content_work", type="text", nullable=false)
     */
    private $contentWork;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="editor_work", type="text", nullable=false)
     */
    private $editorWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="rewiewer_work", type="integer", nullable=false)
     */
    private $rewiewerWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_areaofinterest", type="integer", nullable=false)
     */
    private $idAreaofinterest;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_keywords", type="integer", nullable=false)
     */
    private $idKeywords;



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
     * Set workDate
     *
     * @param \DateTime $workDate
     * @return Work
     */
    public function setWorkDate($workDate)
    {
        $this->workDate = $workDate;
    
        return $this;
    }

    /**
     * Get workDate
     *
     * @return \DateTime 
     */
    public function getWorkDate()
    {
        return $this->workDate;
    }

    /**
     * Set contentWork
     *
     * @param string $contentWork
     * @return Work
     */
    public function setContentWork($contentWork)
    {
        $this->contentWork = $contentWork;
    
        return $this;
    }

    /**
     * Get contentWork
     *
     * @return string 
     */
    public function getContentWork()
    {
        return $this->contentWork;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Work
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set editorWork
     *
     * @param string $editorWork
     * @return Work
     */
    public function setEditorWork($editorWork)
    {
        $this->editorWork = $editorWork;
    
        return $this;
    }

    /**
     * Get editorWork
     *
     * @return string 
     */
    public function getEditorWork()
    {
        return $this->editorWork;
    }

    /**
     * Set rewiewerWork
     *
     * @param integer $rewiewerWork
     * @return Work
     */
    public function setRewiewerWork($rewiewerWork)
    {
        $this->rewiewerWork = $rewiewerWork;
    
        return $this;
    }

    /**
     * Get rewiewerWork
     *
     * @return integer 
     */
    public function getRewiewerWork()
    {
        return $this->rewiewerWork;
    }

    /**
     * Set idAreaofinterest
     *
     * @param integer $idAreaofinterest
     * @return Work
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
     * Set idKeywords
     *
     * @param integer $idKeywords
     * @return Work
     */
    public function setIdKeywords($idKeywords)
    {
        $this->idKeywords = $idKeywords;
    
        return $this;
    }

    /**
     * Get idKeywords
     *
     * @return integer 
     */
    public function getIdKeywords()
    {
        return $this->idKeywords;
    }
}