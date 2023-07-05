<?php
class Conta{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct($nome, $tipoConta, $num){
        $this->setNumConta($num);
        $this->setTipo($tipoConta);
        $this->setDono($nome);
        $this->setSaldo(0);
        $this->setStatus(false);
    }
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($this->getTipo() == "cc"){
            $this->setSaldo($this->getSaldo()+50);
        }elseif($this->getTipo() == "cp"){
            $this->setSaldo($this->getSaldo()+150);
        }
    }

    public function fecharConta(){
        if($this->getStatus()==true and $this->getSaldo()==0.00){
            $this->setStatus(false);
        }elseif(!$this->getStatus()){
            echo "Conta não está aberta.\n";
        }elseif($this->getSaldo()<0){
            echo "Você tem débitos a pagar ao banco antes de fechar sua conta!!!\n";
        }elseif($this->getSaldo()>0){
            echo "Você ainda tem dinheiro em sua conta, retire-o antes fechar sua conta!!!\n";
        }
    }

    public function depositar($valor){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$valor);
        }elseif(!$this->getStatus()){
            echo "Esta conta não está ativa para que seja realizado o depósito!!!\n";
        }
    }

    public function sacar($valor){
        if($this->getStatus() and $this->getSaldo() >= $valor){
            $this->setSaldo($this->getSaldo()-$valor);
        }elseif(!$this->getStatus()){
            echo "Esta conta não está ativa para que seja realizado o saque!!!\n";
        }elseif($this->getSaldo() < $valor){
            echo "Valor a ser sacado maior que o saldo da conta!!!\n";
        }
    }

    public function pagarMensal(){
        if($this->getStatus()){
            if($this->getTipo() == "cp"){
                $this->setSaldo($this->getSaldo()-20.00);
            }elseif($this->getTipo() == "cc"){
                $this->setSaldo($this->getSaldo()-12.00);
            }
        }else{
            echo "A conta está inativa, então não pode cobrar mensalidade dela!!!\n";
        }
        
    }

    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($num){
        $this->numConta = $num;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
}

?>