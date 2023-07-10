<?php
require_once 'Pessoa.php';
require_once 'Professor.php';
require_once 'Aluno.php';
require_once 'Funcionario.php';
$p1 = new Pessoa("Essinho",23,"M");
$p2 = new Professor("Cristiano",20,"M");
$p3 = new Aluno("Gleygley",24,"M");
$p4 = new Funcionario("Nini",23,"M");
$p2->setSalario(3750.00);
$p2->setEspecialidade("Data Science");
$p3->setMatricula(true);
$p3->setCurso("Ciências da computação");
$p4->setSetor("RH");
$p4->setTrabalhando(true);
$p2->receberAumento(500.00);
$p3->cancelarMatricula();
$p4->mudarTrabalhando();
echo '<pre>';
print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);
?>