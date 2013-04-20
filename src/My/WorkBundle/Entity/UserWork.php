<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserWork
 *
 * @ORM\Table(name="user_work")
 * @ORM\Entity
 */
class UserWork
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_work", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     */
    private $idWork;



    /**
     * Get idUserWork
     *
     * @return integer 
     */
    public function getIdUserWork()
    {
        return $this->idUserWork;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return UserWork
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return UserWork
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