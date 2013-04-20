<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_note", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     */
    private $idWork;

    /**
     * @var string
     *
     * @ORM\Column(name="note_content", type="text", nullable=false)
     */
    private $noteContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_review", type="integer", nullable=false)
     */
    private $idReview;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_editor", type="integer", nullable=false)
     */
    private $idEditor;



    /**
     * Get idNote
     *
     * @return integer 
     */
    public function getIdNote()
    {
        return $this->idNote;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return Note
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
     * Set noteContent
     *
     * @param string $noteContent
     * @return Note
     */
    public function setNoteContent($noteContent)
    {
        $this->noteContent = $noteContent;
    
        return $this;
    }

    /**
     * Get noteContent
     *
     * @return string 
     */
    public function getNoteContent()
    {
        return $this->noteContent;
    }

    /**
     * Set idReview
     *
     * @param integer $idReview
     * @return Note
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

    /**
     * Set idEditor
     *
     * @param integer $idEditor
     * @return Note
     */
    public function setIdEditor($idEditor)
    {
        $this->idEditor = $idEditor;
    
        return $this;
    }

    /**
     * Get idEditor
     *
     * @return integer 
     */
    public function getIdEditor()
    {
        return $this->idEditor;
    }
}