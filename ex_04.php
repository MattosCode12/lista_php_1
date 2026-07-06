<?php

function gerarSenha($tamanho)
{
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*?";
    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

echo "<h3>Exercício 04</h3>";
echo "Senha gerada: " . gerarSenha(10);

echo "<hr>";

?>