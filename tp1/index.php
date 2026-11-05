<?php 
declare(strict_types=1);
// Affciher bonjour
echo "Hello, World";
$age=20;

// défintion de la fonction
function showAge(int &$a)
{
    echo "Votre age est : ".$a;
    $a=$a+5;
    echo " age est : ".$a;

}
// appel
showAge($age);

echo "mon age après appel de la fonction est : $age";
// TP 2
Echo "TP2";
