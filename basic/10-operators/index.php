<?php 
    $nome = 'gus';
    $nome2 = 'joao';

    if($nome == $nome2) {
        echo 'é igual';
    }

    if($nome != $nome2){
        echo 'é diferente';
    }

    $valor = 10;
    $valor2 = '10';

    if($valor  == $valor2){
        echo 'São iguais';
    }

    if($valor === $valor2) {
        echo 'n';
    }else {
        echo "Porém não identicos";
    }
?>