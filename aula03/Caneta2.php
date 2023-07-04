<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function tampar(){
        if($this->tampada){
            echo "A caneta já está tampada!!";
        }else{
            $this->tampada = true;
            echo "Caneta tampada!!";
        }
    }
    public function destampar(){
        if(!$this->tampada){
            echo "A caneta já está destampada!!";
        }else{
            $this->tampada = false;
            echo "Caneta destampada!!";
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