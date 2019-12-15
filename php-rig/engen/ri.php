<?php
require  'r.html';
$do=$_POST['do'];
$po=$_POST['po'];
$ta=$_POST['ta'];
$regexp = "/([0-9])/"; 
if (preg_match($regexp,$do)&&preg_match($regexp,$po)&&preg_match($regexp,$ta) ) 
{
    $summ=("$do"-"$po")*"$ta";
    echo '<h2>К оплате:</h2>',"$summ" ;
} else {
    echo "- Ничего не найдено\n";
} 
?>