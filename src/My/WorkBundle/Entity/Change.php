<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Change
 *
 * @ORM\Table(name="changes")
 * @ORM\Entity
 */
class Change
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_change", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChange;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_date", type="date", nullable=false)
     */
    private $changeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="change_content", type="text", nullable=false)
     */
    private $changeContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     */
    private $idWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_status", type="integer", nullable=false)
     */
    private $idStatus;



    /**
     * Get idChange
     *
     * @return integer 
     */
    public function getIdChange()
    {
        return $this->idChange;
    }

    /**
     * Set changeDate
     *
     * @param \DateTime $changeDate
     * @return Change
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;
    
        return $this;
    }

    /**
     * Get changeDate
     *
     * @return \DateTime 
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Set changeContent
     *
     * @param string $changeContent
     * @return Change
     */
    public function setChangeContent($changeContent)
    {
        $this->changeContent = $changeContent;
    
        return $this;
    }

    /**
     * Get changeContent
     *
     * @return string 
     */
    public function getChangeContent()
    {
        return $this->changeContent;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return Change
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
     * Set idStatus
     *
     * @param integer $idStatus
     * @return Change
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;
    
        return $this;
    }

    /**
     * Get idStatus
     *
     * @return integer 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }
}