<?php

function calcularFormula($x, $y)
{
    if (($x + $y) == 0) {
        return "Não é possível realizar a divisão.";
    }

    return (($x * 2) + $y * 2) / ($x + $y);
}


