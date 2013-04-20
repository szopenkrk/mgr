<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editor
 *
 * @ORM\Table(name="editor")
 * @ORM\Entity
 */
class Editor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_editor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEditor;

    /**
     * @var integer
     *
     * @ORM\Column(name="name_editor", type="integer", nullable=false)
     */
    private $nameEditor;



    /**
     * Get idEditor
     *
     * @return integer 
     */
    public function getIdEditor()
    {
        return $this->idEditor;
    }

    /**
     * Set nameEditor
     *
     * @param integer $nameEditor
     * @return Editor
     */
    public function setNameEditor($nameEditor)
    {
        $this->nameEditor = $nameEditor;
    
        return $this;
    }

    /**
     * Get nameEditor
     *
     * @return integer 
     */
    public function getNameEditor()
    {
        return $this->nameEditor;
    }
}