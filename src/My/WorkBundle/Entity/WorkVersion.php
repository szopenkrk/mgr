<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkVersion
 *
 * @ORM\Table(name="work_version")
 * @ORM\Entity
 */
class WorkVersion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_work_version", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWorkVersion;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version;

    /**
     * @var integer
     *
     * @ORM\Column(name="work_date_version", type="integer", nullable=false)
     */
    private $workDateVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_version", type="integer", nullable=false)
     */
    private $contentVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="title_version", type="text", nullable=false)
     */
    private $titleVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="editor_work_version", type="text", nullable=false)
     */
    private $editorWorkVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="revierw_work_version", type="text", nullable=false)
     */
    private $revierwWorkVersion;



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
     * Set version
     *
     * @param integer $version
     * @return WorkVersion
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set workDateVersion
     *
     * @param integer $workDateVersion
     * @return WorkVersion
     */
    public function setWorkDateVersion($workDateVersion)
    {
        $this->workDateVersion = $workDateVersion;
    
        return $this;
    }

    /**
     * Get workDateVersion
     *
     * @return integer 
     */
    public function getWorkDateVersion()
    {
        return $this->workDateVersion;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return WorkVersion
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set contentVersion
     *
     * @param integer $contentVersion
     * @return WorkVersion
     */
    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    
        return $this;
    }

    /**
     * Get contentVersion
     *
     * @return integer 
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * Set titleVersion
     *
     * @param string $titleVersion
     * @return WorkVersion
     */
    public function setTitleVersion($titleVersion)
    {
        $this->titleVersion = $titleVersion;
    
        return $this;
    }

    /**
     * Get titleVersion
     *
     * @return string 
     */
    public function getTitleVersion()
    {
        return $this->titleVersion;
    }

    /**
     * Set editorWorkVersion
     *
     * @param string $editorWorkVersion
     * @return WorkVersion
     */
    public function setEditorWorkVersion($editorWorkVersion)
    {
        $this->editorWorkVersion = $editorWorkVersion;
    
        return $this;
    }

    /**
     * Get editorWorkVersion
     *
     * @return string 
     */
    public function getEditorWorkVersion()
    {
        return $this->editorWorkVersion;
    }

    /**
     * Set revierwWorkVersion
     *
     * @param string $revierwWorkVersion
     * @return WorkVersion
     */
    public function setRevierwWorkVersion($revierwWorkVersion)
    {
        $this->revierwWorkVersion = $revierwWorkVersion;
    
        return $this;
    }

    /**
     * Get revierwWorkVersion
     *
     * @return string 
     */
    public function getRevierwWorkVersion()
    {
        return $this->revierwWorkVersion;
    }
}