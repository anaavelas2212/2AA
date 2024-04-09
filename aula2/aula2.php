<?php
echo("<h2>Trabalhando com PHP</h2>");
print("Ola, eu estou programando em PHP<br>");
echo("Testando a saída de uma String com echo<br>");
//este é um comentário simples
#este também é um comentário simples
/*
multi comentário
*/
$nome = "Ana";
$sobrenome = "Avelãs";
$idade = 16;
$numero =2024;
$dia = 22;
$valordia = 90.35;
$salario;
$salario = $dia * $valordia;
echo ("Nome: " . $nome. "<br>");
echo("Sobrenome: " . $sobrenome . "<br>");
echo("Nome Completo: " . $nome . " ". $sobrenome . "<br>");
echo("Idade: " . $idade . "<br>");
print("Número: " . $numero . "<br>");
print("Dia: " . $dia . "<br>");
print("Valor dia: " . $valordia . "<br>");
print("Salário R$ : " . $salario . "<br>");
print("Salário R$: " . ($dia*$valordia) . "<br>");

print("###################################" . "<br>");
$a =10;
$b = 20;
$soma;
$subtracao;
$multiplicacao;
$divisao;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo ("Soma:" . $soma . "<br>");
echo ("Subtração:" . $subtracao ."<br>");
echo ("Multiplicação:" . $multiplicacao . "<br>");
echo ("Divisão:" . $divisao . "<br>");
print("######################################" . "<br>");
?>