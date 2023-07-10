<?php
class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($name, $age, $genre)
    {
        $this->setNome($name);
        $this->setIdade($age);
        $this->setSexo($genre);
    }

    public function fazerAniversario(){
        $this->setIdade($this->getIdade()+1);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    } 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}
?>