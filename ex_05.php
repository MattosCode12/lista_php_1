<?php

function analisarTexto($texto)
{
    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);

    $vogais = preg_match_all('/[aeiouáàãâéêíóôõú]/iu', $texto);

    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $texto);

    echo "Texto: $texto <br>";
    echo "Quantidade de palavras: $palavras <br>";
    echo "Quantidade de caracteres: $caracteres <br>";
    echo "Quantidade de vogais: $vogais <br>";
    echo "Quantidade de consoantes: $consoantes <br>";
}

echo "<h3>Exercício 05</h3>";
analisarTexto("Programação em PHP");

echo "<hr>";

?>