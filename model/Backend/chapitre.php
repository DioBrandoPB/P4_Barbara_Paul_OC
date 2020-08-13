<?php

namespace App\model\Backend;

class chapitre
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    private $extrait;

    /**
     * @var string
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $Images;
    

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setImage($Images)
    {
        $this->Images = $Images;
    }
    public function getImages()
    {
        return $this->Images;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
    * @return string
    */
   public function getExtrait()
   {
       return $this->extrait;
   }
    /**
     * @param string $extrait
     */
    public function setExtrait($extrait)
    {
        $this->extrait = $extrait;
    }
    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    
}