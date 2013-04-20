<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Speaker
 *
 * @ORM\Table(name="speaker")
 * @ORM\Entity
 */
class Speaker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_speaker", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpeaker;

    /**
     * @var string
     *
     * @ORM\Column(name="speaker_work", type="text", nullable=false)
     */
    private $speakerWork;

    /**
     * @var string
     *
     * @ORM\Column(name="speaker_name", type="text", nullable=false)
     */
    private $speakerName;

    /**
     * @var string
     *
     * @ORM\Column(name="speaker_surname", type="text", nullable=false)
     */
    private $speakerSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="speaker_place", type="text", nullable=false)
     */
    private $speakerPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="speaker_mail", type="text", nullable=false)
     */
    private $speakerMail;



    /**
     * Get idSpeaker
     *
     * @return integer 
     */
    public function getIdSpeaker()
    {
        return $this->idSpeaker;
    }

    /**
     * Set speakerWork
     *
     * @param string $speakerWork
     * @return Speaker
     */
    public function setSpeakerWork($speakerWork)
    {
        $this->speakerWork = $speakerWork;
    
        return $this;
    }

    /**
     * Get speakerWork
     *
     * @return string 
     */
    public function getSpeakerWork()
    {
        return $this->speakerWork;
    }

    /**
     * Set speakerName
     *
     * @param string $speakerName
     * @return Speaker
     */
    public function setSpeakerName($speakerName)
    {
        $this->speakerName = $speakerName;
    
        return $this;
    }

    /**
     * Get speakerName
     *
     * @return string 
     */
    public function getSpeakerName()
    {
        return $this->speakerName;
    }

    /**
     * Set speakerSurname
     *
     * @param string $speakerSurname
     * @return Speaker
     */
    public function setSpeakerSurname($speakerSurname)
    {
        $this->speakerSurname = $speakerSurname;
    
        return $this;
    }

    /**
     * Get speakerSurname
     *
     * @return string 
     */
    public function getSpeakerSurname()
    {
        return $this->speakerSurname;
    }

    /**
     * Set speakerPlace
     *
     * @param string $speakerPlace
     * @return Speaker
     */
    public function setSpeakerPlace($speakerPlace)
    {
        $this->speakerPlace = $speakerPlace;
    
        return $this;
    }

    /**
     * Get speakerPlace
     *
     * @return string 
     */
    public function getSpeakerPlace()
    {
        return $this->speakerPlace;
    }

    /**
     * Set speakerMail
     *
     * @param string $speakerMail
     * @return Speaker
     */
    public function setSpeakerMail($speakerMail)
    {
        $this->speakerMail = $speakerMail;
    
        return $this;
    }

    /**
     * Get speakerMail
     *
     * @return string 
     */
    public function getSpeakerMail()
    {
        return $this->speakerMail;
    }
}