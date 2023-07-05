<?php
require_once "ContaBanco.php";
echo "Vamos começar\n";
$nome = (string)readline("Digite seu nome: ");
echo "\n";
$num = (int)readline("Digite o número da sua conta: ");
echo "\n";
$tipo = (string)readline("Digite < cp > para conta poupança ou < cc > para conta corrente: ");
echo "\n";
if($tipo != "cp" and $tipo != "cc"){
    $tipo = (string)readline("Digite < cp > para conta poupança ou < cc > para conta corrente: ");
    echo "\n";
}
$c1 = new Conta($nome, $tipo, $num);
while(true){
    echo "1- Abrir conta\n";
    echo "2- Fechar conta\n";
    echo "3- Depositar\n";
    echo "4- Sacar\n";
    echo "5- Pagar mensalidade\n";
    echo "6 - dados da conta\n";
    $acao = (int)readline("Digite o que deseja realizar na sua conta: ");
    echo "\n";
    if($acao == 1){
        $c1->abrirConta($c1->getTipo());
    }elseif($acao == 2){
        $c1->fecharConta();
    }elseif($acao == 3){
        $valor = (float)readline("Digite o valor que deseja depositar na sua conta: ");
        $c1->depositar($valor);
    }elseif($acao == 4){
        $valor = (float)readline("Digite o valor que deseja sacar da sua conta: ");
        $c1->sacar($valor);
    }elseif($acao == 5){
        $c1->pagarMensal();
    }elseif($acao == 6){
        print_r($c1);
    }
}
?>