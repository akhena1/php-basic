<?php 
    $nome = 'gus';

    if($nome == 'gus'):
        echo 'Verdade';
    endif;

    $contador = 0;
    while($contador < 10) :
        $contador++;
        echo 'oi';
        echo '<hr>';
    endwhile;
?>