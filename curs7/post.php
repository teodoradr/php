<?php

$cheie= "cheie_secreta_generata_pe_sesiune";
if($cheie!==$_POST['hash'] ){
    echo 'Eroare CSRF';die;
}

print_r($_POST);
include_once("connect.php");

$nume='';
$prenume='';
$email='';
$parola='';

//validare
if(isset($_POST['prenume']) && !empty($_POST['prenume']) && strlen($_POST['prenume'])>3){
    $prenume=trim($_POST['prenume']);
}
else{
    $error = true;
    $mess_error.='Prenumele nu a fost introdus!'."<br />";
}
if(isset($_POST['nume']) && !empty($_POST['nume'])){
    $nume= trim($_POST['nume']);
}
else{
    $error = true;
    $mess_error.='Numele nu a fost introdus!'."<br />";
}
if(isset($_POST['email']) && !empty($_POST['email'])){
    $email= trim($_POST['email']);
}
else{
    $error = true;
    $mess_error.='Emailul nu a fost introdus!'."<br />";
}
if(isset($_POST['parola']) && !empty($_POST['parola'])){
        $parola= sha1(trim($_POST['parola']));
}
else{
    $error = true;
    $mess_error.='Parola nu a fost introdusa corect!'."<br />";
}