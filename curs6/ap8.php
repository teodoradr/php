<?php

$site = 'google.com';
if(isset($site)){

    $site_fara_spatii = trim(htmlspecialchars($site, ENT_QUOTES));
    $pattern = "/^(https?:\/\/)?(www\.)?[a-zA-Z0-9-.]{3,30}([\.])[a-zA-Z]{1,4}$/";
    if(preg_match($pattern, $site_fara_spatii )){
        echo 'Web site-ul este valid.';
    } else{
        echo 'Web site-ul nu este valid.';
    }
}