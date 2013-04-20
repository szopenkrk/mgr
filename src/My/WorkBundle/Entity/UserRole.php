<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRole
 *
 * @ORM\Table(name="user_role")
 * @ORM\Entity
 */
class UserRole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     */
    private $idRole;



    /**
     * Get idUserRole
     *
     * @return integer 
     */
    public function getIdUserRole()
    {
        return $this->idUserRole;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return UserRole
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idRole
     *
     * @param integer $idRole
     * @return UserRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    
        return $this;
    }

    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }
}