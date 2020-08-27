<?php 

    $conteudo = "123456789";

        //substring() do js
    echo substr($conteudo,0,8); // retorna 12345678

    $nome = "Gustavo Marcondes S";
        // split() do js
    $nomes = explode(' ',$nome );

    print_r($nomes);

    $nomes = implode(' ', $nomes);

    print_r($nomes);

    strip_tags // retira tags html do conteudo

?>