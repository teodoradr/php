<?php
// https://www.w3resource.com/php-exercises/
// Calculul si afisarea sumei cifrelor unui numar natural n.
// Date de intrare numar Ex. $n = 123454321
// Date  de iesire  suma = 1+2+3+4+5+4+3+2+1 = 25

declare(strict_types=1);
function sumaCifre( int $n):int{
    ($n<0)?$n = $n* (-1): $n=$n;
    $s=0; // Initializarea sumei cu 0
    while($n>0) {
        $ultimaCifra = $n % 10; //Adaugarea ultimei cifre
        $s=$s + $ultimaCifra;
        $n= (int) ($n / 10);
    }
    return $s; //returneaza suma
}

$suma = sumaCifre(-12);
echo $suma;