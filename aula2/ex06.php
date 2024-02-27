<?php
// exemplo de estrutura condicional 
// a partir da media final do ano, apresente o resultado final do aluno 
$media = 10; 
$r = "reprovado"; // resultado padrao 
if ($media >= 6){
    $r = "aprovado";
}
else 
if ($madia >=4){
    $r ="recuperacao";
}

echo "resultado: $r";
