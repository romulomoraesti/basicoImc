<?php

//EXEMPLO
//PESO = 74.2
//ALTURA = 1.62


function calculaImc($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

$resultado = calculaImc(86.1, 1.78);
echo number_format($resultado, 2, ',');
