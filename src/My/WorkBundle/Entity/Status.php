<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity
 */
class Status
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     */
    private $idWork;



    /**
     * Get idStatus
     *
     * @return integer 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return Status
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