<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpeakerWork
 *
 * @ORM\Table(name="speaker_work")
 * @ORM\Entity
 */
class SpeakerWork
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_speaker_work", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpeakerWork;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cd", type="date", nullable=false)
     */
    private $dateCd;

    /**
     * @var string
     *
     * @ORM\Column(name="speaker_content_work", type="text", nullable=false)
     */
    private $speakerContentWork;



    /**
     * Get idSpeakerWork
     *
     * @return integer 
     */
    public function getIdSpeakerWork()
    {
        return $this->idSpeakerWork;
    }

    /**
     * Set dateCd
     *
     * @param \DateTime $dateCd
     * @return SpeakerWork
     */
    public function setDateCd($dateCd)
    {
        $this->dateCd = $dateCd;
    
        return $this;
    }

    /**
     * Get dateCd
     *
     * @return \DateTime 
     */
    public function getDateCd()
    {
        return $this->dateCd;
    }

    /**
     * Set speakerContentWork
     *
     * @param string $speakerContentWork
     * @return SpeakerWork
     */
    public function setSpeakerContentWork($speakerContentWork)
    {
        $this->speakerContentWork = $speakerContentWork;
    
        return $this;
    }

    /**
     * Get speakerContentWork
     *
     * @return string 
     */
    public function getSpeakerContentWork()
    {
        return $this->speakerContentWork;
    }
}