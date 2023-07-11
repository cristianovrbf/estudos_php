<?php
abstract class Person{
    protected $name;
    protected $age;
    protected $genre;
    protected $experience;

    public function __construct($inputName, $inputAge, $inputGenre){
        $this->setName($inputName);
        $this->setAge($inputAge);
        $this->setGenre($inputGenre);
        $this->setExperience(0);
    }

    protected function gainExperience(){
        echo "<br>Gaining Experience...";
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of experience
     */ 
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set the value of experience
     *
     * @return  self
     */ 
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }
}
?>