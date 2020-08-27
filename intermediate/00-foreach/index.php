<?php 
                // Index personalizado
    $arr = array('teste' => 'Gustavo', 'Joao', 'Felipe', 'Mario');

    // foreach ($arr as $key => $value) {
    //     echo $key;
    //     echo '=>';
    //     echo $value;
    //     echo '<hr>';
    // }

    $total = count($arr);

    // Não reconhece o index personalizado
    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
        echo '<br />';
    } 
?>