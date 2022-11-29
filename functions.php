<?php
if (!empty($passwordLength) && $passwordLength >= 7) {
    $password = generatePassword($passwordLength);
}


function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
    return substr(str_shuffle($characters), 0, $length);
}
