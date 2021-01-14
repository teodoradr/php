<?php

$email = 'aaaaaa@aaa.com';
if (isset($email)) {
    $adresaEmail = trim(htmlentities($email, ENT_QUOTES));
    $pattern = "/[a-zA-Z0-9_-]{3,30}+@[a-zA-Z0-9-]{3,30}+.[a-zA-Z]{2,4}/";
    if (preg_match($pattern, $adresaEmail)) {
        echo 'Adresa de e-mail este corecta.';
    } else {
        echo 'Adresa de e-mail nu este corecta.';
    }
}