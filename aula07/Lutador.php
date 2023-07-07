<?php
require_once 'UFC.php';
class Lutador implements UFC{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $empates, $derrotas){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    public function apresentar(){
        echo "<br><br>Lutador: {$this->getNome()}<br>Nacionalidade: {$this->getNacionalidade()}<br>Idade: {$this->getIdade()}";
        echo "<br>Altura: {$this->getAltura()}<br>Peso: {$this->getPeso()}<br>Categoria: {$this->getCategoria()}";
        echo "<br>Vitórias: {$this->getVitorias()}<br>Derrotas: {$this->getDerrotas()}<br>Empates: {$this->getEmpates()}<br>";
        echo "<br><hr>";
    }

    public function status(){
        echo "<br>Lutador: {$this->getNome()}<br>Categoria: {$this->getCategoria()}<br>Vitórias: {$this->getVitorias()}<br>";
        echo "Empates: {$this->getEmpates()}<br>Derrotas: {$this->getDerrotas()}<br>";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($n){
        $this->nacionalidade = $n;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($a){
        $this->altura = $a;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria($p);
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($peso){
        if($peso < 52.2 or $peso > 120.2){
            $this->categoria = "Inválido";
        }elseif($peso <= 70.3){
            $this->categoria = "Peso Leve";
        }elseif($peso <= 83.9){
            $this->categoria = "Peso Médio";
        }else if($peso <= 120.2){
            $this->categoria = "Peso Pesado";
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($v){
        $this->vitorias = $v;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($d){
        $this->derrotas = $d;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($e){
        $this->empates = $e;
    }
}
?>