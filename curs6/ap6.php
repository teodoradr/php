<?php

$string = 'Acesta este un string.';
if(preg_match('/este/', $string)){
echo 'Cuvantul <b>este</b> a fost gasit in stringul dat.';
} else{
echo 'Cuvantul <b>este</b> nu a fost gasit in stringul dat.';
}