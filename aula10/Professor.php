<?php
require_once "Pessoa.php";
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function __construct($name, $age, $genre)
    {
        $this->setNome($name);
        $this->setIdade($age);
        $this->setSexo($genre);
    }

    public function receberAumento($valor){
        $this->setSalario($this->getSalario()+$valor);
    }

    /**
     * Get the value of especialidade
     */ 
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     *
     * @return  self
     */ 
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}
?>