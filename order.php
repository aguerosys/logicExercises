<?php
    $frase = "en5 4terremoto NAS1A regi2stro L0a M6arte u3n";
    //$frase = "ma2r ma5rinos al1 tr3es Dev0olvieron lo4bos"; 
    //$frase = " ";

    $arrayPalabras = explode(" ", $frase); //explode convierte un string en array

    $diccionarioPalabras = array();
    
   for ($i = 0; $i < count($arrayPalabras); $i++){ //recorro el array con las palabras separadas

        $arrayCaracteres = str_split($arrayPalabras[$i]); //divido en un array de caracteres las palabras para poder obtener la clave

        for($j = 0; $j < count($arrayCaracteres); $j++ ){
            if(is_numeric($arrayCaracteres[$j])){

                $diccionarioPalabras[$arrayCaracteres[$j]] = $arrayPalabras[$i];             
            } 
        }     
    }
    ksort($diccionarioPalabras); // metodo de ordenamiento por clave
    $palabraOrdenada = implode(' ', $diccionarioPalabras); //convierto el array ordenado en un string para mostrarlo
    print_r ($palabraOrdenada); 

    //resultado 1: L0a NAS1A regi2stro u3n 4terremoto en5 M6arte
    //resultado 2: 
    //resultado 3: Dev0olvieron al1 ma2r tr3es lo4bos ma5rinos
?>