<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachments
 *
 * @ORM\Table(name="attachments")
 * @ORM\Entity
 */
class Attachments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_attachments", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttachments;

    /**
     * @var string
     *
     * @ORM\Column(name="content_attachments", type="text", nullable=false)
     */
    private $contentAttachments;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     */
    private $idWork;



    /**
     * Get idAttachments
     *
     * @return integer 
     */
    public function getIdAttachments()
    {
        return $this->idAttachments;
    }

    /**
     * Set contentAttachments
     *
     * @param string $contentAttachments
     * @return Attachments
     */
    public function setContentAttachments($contentAttachments)
    {
        $this->contentAttachments = $contentAttachments;
    
        return $this;
    }

    /**
     * Get contentAttachments
     *
     * @return string 
     */
    public function getContentAttachments()
    {
        return $this->contentAttachments;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return Attachments
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
}