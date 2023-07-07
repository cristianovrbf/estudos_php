<?php
require_once 'Controlador.php';
class Controle implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setVolume($v){
        $this->volume = $v;
    }
    private function setLigado($l){
        $this->ligado = $l;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        if($this->getLigado()){
            echo "Volume: {$this->getVolume()} ";
            for($i = 0; $i < $this->getVolume(); $i+=10){
                echo "|";
            }
            echo "\nLigado: {$this->getLigado()}\n";
            echo "Tocando: {$this->getTocando()}\n";
        }
    }
    public function fecharMenu(){
        if($this->getLigado()){
            echo "Fechando menu...\n";
        }
    }
    public function maisVolume(){
        if($this->getLigado()  and $this->getVolume() < 100){
            $this->setVolume($this->getVolume()+5);
        }elseif($this->getVolume() == 100){
            echo "O volume já está no volume máximo!!\n";
        }
    }
    public function menosVolume(){
        if($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume($this->getVolume()-5);
        }elseif($this->getVolume() == 0){
            echo "O volume já está no volume mínimo!!\n";
        }
    }
    public function ligarMudo(){
        if($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume(0);
        }elseif($this->getVolume() == 0){
            echo "O volume já está no volume mínimo!!\n";
        }
    }
    public function desligarMudo(){
        if($this->getLigado() and $this->getVolume() == 0){
            $this->setVolume(50);
        }elseif($this->getVolume() == 0){
            echo "O volume já está ligado!!\n";
        }
    }
    public function play(){
        if($this->getLigado() and !$this->getTocando()){
            $this->setTocando(true);
        }elseif($this->getLigado() and $this->getTocando()){
            echo "A tv já está tocando!!\n";
        }
    }
    public function pause(){
        if($this->getLigado() and $this->getTocando()){
            $this->setTocando(false);
        }elseif($this->getLigado() and !$this->getTocando()){
            echo "A tv já está pausada!!\n";
        }
    }
}
?>