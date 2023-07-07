<?php
require_once 'Lutador.php';
class Luta{
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($primeiroLutador, $segundoLutador){
        if($primeiroLutador->getCategoria() == $segundoLutador->getCategoria()
        and $primeiroLutador->getNome() != $segundoLutador->getNome()){
            $this->setAprovada(true);
            $this->setDesafiante($primeiroLutador);
            $this->setDesafiado($segundoLutador);
        }elseif($primeiroLutador->getCategoria() != $segundoLutador->getCategoria()){
            echo "<br>Não pode haver luta entre lutadores de diferentes categorias!!!";
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }else if($primeiroLutador->getNome() == $segundoLutador->getNome()){
            echo "<br>Um lutador não pode lutar com ele mesmo!!!";
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }
    }
    public function lutar(){
        if($this->getAprovada()){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0,2);
            if($vencedor == 0){
                echo "<br>Empate entre {$this->desafiante->getNome()} e {$this->desafiado->getNome()}!!!";
                $this->desafiante->empatarLuta();
                $this->desafiado->empatarLuta();
            }elseif($vencedor == 1){
                echo "<br>{$this->desafiante->getNome()} ganhou do {$this->desafiado->getNome()}!!!";
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
            }elseif($vencedor == 2){
                echo "<br>{$this->desafiado->getNome()} ganhou do {$this->desafiante->getNome()}!!!";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
            }
        }
    }
    private function getDesafiante(){
        return $this->desafiante;
    }
    private function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    private function getDesafiado(){
        return $this->desafiado;
    }
    private function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    private function getRounds(){
        return $this->rounds;
    }
    private function setRounds($rounds){
        $this->rounds = $rounds;
    }
    private function getAprovada(){
        return $this->aprovada;
    }
    private function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}
?>