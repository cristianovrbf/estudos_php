<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    private $faixaEtaria;

    function __construct($titulo, $autor, $totalPaginas, $leitor, $faixaEtaria){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotalPaginas($totalPaginas);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);
        $this->setFaixaEtaria($faixaEtaria);
    }

    public function detalhes(){
        echo "<br><br>Titulo: {$this->getTitulo()}<br>Autor: {$this->getAutor()}<br>Número de páginas: {$this->getTotalPaginas()}";
        echo "<br>Página Atual: {$this->getPagAtual()}<br>Faixa Etária: {$this->getFaixaEtaria()}<br>Leitor: {$this->leitor->getNome()}<br>";
    }

    public function abrir(){
        if(!$this->getAberto() and $this->leitor->getIdade() >= $this->getFaixaEtaria()){
            $this->setAberto(true);
        }else if($this->getAberto()){
            echo "<br>O livro já está aberto!";
        }else if($this->leitor->getIdade() < $this->getFaixaEtaria()){
            echo "<br>O leitor não tem idade pra ler o livro!";
        }
    }

    public function fechar(){
        if($this->getAberto()){
            $this->setAberto(false);
        }else{
            echo "<br>O livro já está fechado!";
        }
    }

    public function folhear($pagina){
        if($this->getAberto() and $pagina > $this->getTotalPaginas()){
            $this->setPagAtual(0);
        }else if($this->getAberto() and $pagina <= $this->getTotalPaginas()){
            $this->setPagAtual($pagina);
        }else{
            echo "<br>O livro ainda está fechado!";
        }
    }

    public function avancarPag(){
        if($this->getAberto() and $this->getPagAtual() < $this->getTotalPaginas()){
            $this->setPagAtual($this->getPagAtual()+1);
        }elseif(!$this->getAberto()){
            echo "<br>O livro ainda está fechado!";
        }else{
            echo "<br>O livro já está na última página!!";
        }
    }

    public function voltarPag(){
        if($this->getAberto() and $this->getPagAtual() > 0){
            $this->setPagAtual($this->getPagAtual()-1);
        }elseif(!$this->getAberto()){
            echo "<br>O livro ainda está fechado!";
        }else{
            echo "<br>O livro ainda está na primeira página!!";
        }
    }
    
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getTotalPaginas(){
        return $this->totalPaginas;
    }
    public function setTotalPaginas($totalPaginas)
    {
        $this->totalPaginas = $totalPaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }  
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    } 
    public function getFaixaEtaria(){
        return $this->faixaEtaria;
    }
    public function setFaixaEtaria($faixaEtaria){
        $this->faixaEtaria = $faixaEtaria;
    }
}
?>