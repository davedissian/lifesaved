<?php

function validaCnpj($cnpj){

    if(empty($cnpj))
        return false;

    $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

    if (strlen($cnpj) != 14)
        return false;

    if (preg_match('/(\d)\1{13}/', $cnpj))
        return false;

    $b = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

    for ($i = 0, $n = 0; $i < 12; $n += $cnpj[$i] * $b[++$i]);

    if ($cnpj[12] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        return false;
    }

    for ($i = 0, $n = 0; $i <= 12; $n += $cnpj[$i] * $b[$i++]);

    if ($cnpj[13] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        return false;
    }
    return true;
}


