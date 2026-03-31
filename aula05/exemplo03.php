<?php
    $json_str = '{ "empregados": 
        [ 
            {"nome":"Jason Jones", "idade":38, "sexo": "M", "dependentes": ["Sedna Jones", "Ian Jones"]}, 
            {"nome":"Ada Pascallin", "idade":35, "sexo": "F"}, 
            {"nome":"Delphino da Silva", "idade":26, "sexo": "M"} 
        ], 
        "data": "15/12/2012"}'; 

    $jsonobj = json_decode($json_str); 

    $empregados = $jsonobj->empregados; 

    echo "<b>data do arquivo</b>: $jsonobj->data<br/>"; 
    foreach ( $empregados as $e ) { 
        echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br/>"; 
        if (property_exists($e, "dependentes")) { 
            $deps = $e->dependentes; 
            echo "dependentes: <br/>"; 
            foreach ( $deps as $d ) echo "- $d<br/>"; 
        } 
    }

?>