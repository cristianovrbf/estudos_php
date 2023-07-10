<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    private $curso;
    private $matricula;
    
    public function __construct($name, $age, $genre)
    {
        $this->setNome($name);
        $this->setIdade($age);
        $this->setSexo($genre);
    }

    public function cancelarMatricula(){
        if($this->getMatricula()){
            $this->setMatricula(false);
        }else{
            echo "<br>O aluno não está matriculado!!!";
        }
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
}
?>