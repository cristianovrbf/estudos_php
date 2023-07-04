<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    // public function __construct(){
    //     $this->tampar();
    //     $this->cor = "Azul";
    // }

    public function Caneta($m, $c, $p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function getModelo(){
        return $this->modelo;
    }
   
    public function setModelo($m){
        $this->modelo = $m;
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    
    public function setPonta($p){
        $this->ponta = $p;
    }
    
    public function tampar(){
        if($this->tampada){
            echo "A caneta já está tampada!!";
        }else{
            $this->tampada = true;
        }
    }
    
    public function destampar(){
        if(!$this->tampada){
            echo "A caneta já está destampada!!";
        }else{
            $this->tampada = false;
        }
    }
    
    public function rabiscar(){
        if(!$this->tampada and $this->carga > 0){
            echo "Rabiscando...";
        }elseif($this->tampada){
            echo "A caneta está tampada, então não pode rabiscar!";
        }elseif($this->carga <= 0){
            echo "A caneta está sem carga, então não pode rabiscar!";
        }
    }
}
?>