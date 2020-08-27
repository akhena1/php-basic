<?php 

    $nome =  'Gus';

    /* switch($nome) {
        case 'Guilherme':
            echo 'Minha variável é guilherme';
        break;
        case 'Gus':
            echo 'Minha variável é Gus';
        break;
    } */

    for($i = 0; $i < 10;  $i++) {
        if($i == 5) continue;
        echo $i;
        echo  '<hr>';
        /* if($i == 5)
    break;   */
    } 

?>