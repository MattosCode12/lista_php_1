<?php

function mascararCpf($cpf)
{
    return str_repeat("*", strlen($cpf) - 4) . substr($cpf, -4);
}

$cpf = "12345678901";

echo "<h3>Exercício 03</h3>";
echo "CPF Original: $cpf <br>";
echo "CPF Mascarado: " . mascararCpf($cpf);

?>