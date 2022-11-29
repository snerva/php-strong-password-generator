<?php



if (!empty($passwordLength) && $passwordLength >= 7) {
    $password = generatePassword($passwordLength);
}


function generatePassword($length)
{
    $characters = '';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*';

    if (isset($chUppercase)) {
        var_dump('lettere maiuscole');
        $characters .= $uppercase;
    }
    if (isset($chLowercase)) {
        //var_dump('lettere minuscole');
        $characters .= $lowercase;
    }
    if (isset($chNumber)) {
        //var_dump('numeri');
        $characters .= $numbers;
    }
    if (isset($chSymbols)) {
        //var_dump('simboli');
        $characters .= $symbols;
    }

    return substr(str_shuffle($characters), 0, $length);
}
