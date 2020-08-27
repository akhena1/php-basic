<?php 

        //Single array
    $arr = ['Gustavo', 'Joao'];
    $arr = array('Gustavo', 'chave2'=>'joao');
    $arr[0] = 'Guilherme';
    $arr[] = 'joao';
        
        //Array multimensional
    $arr2 = array(array('Gustavo', 'Joao'), array(23, 45));

    echo $arr2[0][0]
?>