<?php
require_once 'Person.php';
class Subscribed extends Person{
    private $login;
    private $totalVideosWatched;

    public function __construct($inputName, $inputAge, $inputGenre, $inputLogin){
        parent::__construct($inputName,$inputAge, $inputGenre);
        $this->setLogin($inputLogin);
        $this->setTotalVideosWatched(0);
    }

    public function watchedOneMore(){
        $totalVideosWatched = $this->getTotalVideosWatched();
        $newTotal = $totalVideosWatched + 1;
        $this->setTotalVideosWatched($newTotal);
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totalVideosWatched
     */ 
    public function getTotalVideosWatched()
    {
        return $this->totalVideosWatched;
    }

    /**
     * Set the value of totalVideosWatched
     *
     * @return  self
     */ 
    public function setTotalVideosWatched($totalVideosWatched)
    {
        $this->totalVideosWatched = $totalVideosWatched;

        return $this;
    }
}
?>