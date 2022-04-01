<?php 
    if((int)$_POST['edad']< 18){
        echo "<script> alert('Es menor de edad')</script> ";}
    else{
        echo "<script> alert('Es mayor de edad')</script> ";}
?>