<?php
require_once 'VideoActions.php';
class Video implements VideoActions{
    private $title;
    private $evaluation;
    private $views;
    private $likes;
    private $reproducing;

    public function __construct($inputTitle){
        $this->setTitle($inputTitle);
        $this->setEvaluation(0);
        $this->setViews(0);
        $this->setLikes(0);
        $this->setReproducing(false);
    }

    public function play(){
        $isReproducing = $this->getReproducing();
        if($isReproducing == true){
            echo "<br>The video is already playing";
        }else{
            $this->setReproducing(true);
            echo "<br>Video started";
        }
    }

    public function pause(){
        $isReproducing = $this->getReproducing();
        if($isReproducing == false){
            echo "<br>The video is already paused";
        }else{
            $this->setReproducing(false);
            echo "<br>Video pausado";
        }
    }

    public function like(){
        $totalOfLikes = $this->getLikes();
        $newTotalOfLikes = $totalOfLikes + 1;
        $this->setLikes($newTotalOfLikes);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of views
     */ 
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @return  self
     */ 
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of likes
     */ 
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set the value of likes
     *
     * @return  self
     */ 
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get the value of reproducing
     */ 
    public function getReproducing()
    {
        return $this->reproducing;
    }

    /**
     * Set the value of reproducing
     *
     * @return  self
     */ 
    public function setReproducing($reproducing)
    {
        $this->reproducing = $reproducing;

        return $this;
    }

    /**
     * Get the value of evaluation
     */ 
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set the value of evaluation
     *
     * @return  self
     */ 
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }
}
?>