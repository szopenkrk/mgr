<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Work
 *
 * @ORM\Table(name="work")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Work
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWork;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="work_date", type="date", nullable=false)
     */
    private $workDate;

    /**
     * @var string
     *
     * @ORM\Column(name="content_work", type="text", nullable=false)
     */
    private $contentWork;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="editor_work", type="text", nullable=false)
     */
    private $editorWork = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="rewiewer_work", type="integer", nullable=false)
     */
     private $rewiewerWork = '';


     protected $Areaofinterest = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reviewer", type="text", nullable=false)
     */
    private $reviewer;

    /**
     * Set reviewer
     *
     * @param string reviewer
     * @return reviewer
     */
    public function setReviewer($reviewer)
    {
        $this->reviewer = $reviewer;

        return $this;
    }

    /**
     * Get reviewer
     *
     * @return string
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="review", type="text", nullable=false)
     */
    private $review;

    /**
     * Set review
     *
     * @param string review
     * @return review
     */
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Get review
     *
     * @return string
     */

    public function getReview()
    {
        return $this->review;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="editor", type="text", nullable=false)
     */
    private $editor;

    /**
     * Set editor
     *
     * @param string editor
     * @return editor
     */
    public function seteditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string
     */
    public function geteditor()
    {
        return $this->editor;
    }






     protected $Attachments= '0';

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="works")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $Author;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_keywords", type="integer", nullable=false)
     */
    private $idKeywords = 0;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    
    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../public_html/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }

    private $temp;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->path);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
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
     * Set workDate
     *
     * @param \DateTime $workDate
     * @return Work
     */
    public function setWorkDate($workDate)
    {
        $this->workDate = $workDate;
    
        return $this;
    }

    /**
     * Get workDate
     *
     * @return \DateTime 
     */
    public function getWorkDate()
    {
        return $this->workDate;
    }
    /**
     * Set contentWork
     *
     * @param string $contentWork
     * @return Work
     */
    public function setContentWork($contentWork)
    {
        $this->contentWork = $contentWork;
    
        return $this;
    }

    /**
     * Get contentWork
     *
     * @return string 
     */
    public function getContentWork()
    {
        return $this->contentWork;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Work
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set editorWork
     *
     * @param string $editorWork
     * @return Work
     */
    public function setEditorWork($editorWork)
    {
        $this->editorWork = $editorWork;
    
        return $this;
    }

    /**
     * Get editorWork
     *
     * @return string 
     */
    public function getEditorWork()
    {
        return $this->editorWork;
    }

    /**
     * Set rewiewerWork
     *
     * @param integer $rewiewerWork
     * @return Work
     */
    public function setRewiewerWork($rewiewerWork)
    {
        $this->rewiewerWork = $rewiewerWork;
    
        return $this;
    }

    /**
     * Get rewiewerWork
     *
     * @return integer 
     */
    public function getRewiewerWork()
    {
        return $this->rewiewerWork;
    }

    /**
     * Set idAreaofinterest
     *
     * @param integer $idAreaofinterest
     * @return Work
     */
    public function setIdAreaofinterest($idAreaofinterest)
    {
        $this->idAreaofinterest = $idAreaofinterest;
    
        return $this;
    }

    /**
     * Get idAreaofinterest
     *
     * @return integer 
     */
    public function getIdAreaofinterest()
    {
        return $this->idAreaofinterest;
    }

    /**
     * Set idKeywords
     *
     * @param integer $idKeywords
     * @return Work
     */
    public function setIdKeywords($idKeywords)
    {
        $this->idKeywords = $idKeywords;
    
        return $this;
    }

    /**
     * Get idKeywords
     *
     * @return integer 
     */
    public function getIdKeywords()
    {
        return $this->idKeywords;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Work
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    public function setAuthor($Author)
    {
        $this->Author = $Author;
    }

    public function getAuthor()
    {
        return $this->Author;
    }


}