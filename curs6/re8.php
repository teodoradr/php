<?php
$tabloul=array("oras"=>"Bucuresti",'a'=> 10, 89);
echo "<pre>";
var_export($tabloul);
$tablou2=array("abac",'a' => "computer","oras"=>"braila",4);
echo "<pre>";
var_export($tablou2);
$rezultat=array_merge($tabloul, $tablou2);
echo "<pre>";
print_r($rezultat);
?>