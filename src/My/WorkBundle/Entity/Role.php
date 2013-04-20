<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="text", nullable=false)
     */
    private $role;



    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
}