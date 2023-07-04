<?php
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function tampar(){
        if($this->tampada){
            echo "A caneta já está tampada!!";
        }else{
            echo "Caneta tampada!!";
        }
    }
    function destampar(){
        if(!$this->tampada){
            echo "A caneta já está destampada!!";
        }else{
            echo "Caneta destampada!!";
        }
    }
    function rabiscar(){
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