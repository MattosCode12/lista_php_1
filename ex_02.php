<?php

function inverterTexto($texto)
{
    $invertido = strrev($texto);
    $quantidade = strlen($texto);

    echo "Texto original: $texto <br>";
    echo "Texto invertido: $invertido <br>";
    echo "Quantidade de caracteres: $quantidade";
}

$texto = "Programação";

echo "<h3>Exercício 02</h3>";
inverterTexto($texto);

echo "<hr>";

?>