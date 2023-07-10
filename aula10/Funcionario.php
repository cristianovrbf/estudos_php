<?php
require_once "Pessoa.php";
class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function __construct($name, $age, $genre)
    {
        $this->setNome($name);
        $this->setIdade($age);
        $this->setSexo($genre);
    }
    
    public function mudarTrabalhando(){
        if($this->getTrabalhando()){
            $this->setTrabalhando(false);
        }else{
            $this->setTrabalhando(true);
        }
    }

    /**
     * Get the value of setor
     */ 
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */ 
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */ 
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     *
     * @return  self
     */ 
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}
?>