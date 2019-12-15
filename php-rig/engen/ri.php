<?php
        require  'r.html';
        if(($_POST['do']!=null)||($_POST['po']!=null)||($_POST['ta']!=null)){
            $summ=("$_POST[do]"-"$_POST[po]")*"$_POST[ta]";
            echo '<h2>К оплате:</h2>',"$summ" ;
            }else{
            exit("Заполните поля");
            }
            
?>