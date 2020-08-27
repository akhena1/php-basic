<?php 
    include('exemplo.php');
    $exemplo = new Exemplo();

    $exemplo->var2 = ' Gustavo ';

    // echo $exemplo->var2;

    // echo Exemplo::metodoEstatico()

    // echo $exemplo->setVar1('Teste');

    echo $exemplo->setVar1('Gus');
    echo $exemplo->getVar1();
?>