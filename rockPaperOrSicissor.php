<?php 
    $piedra = 'piedra';
    $papel = 'papel';
    $tijera  = 'tijera';

    function rockPaperOrSicissor($userOption, $cpuOption){
        $piedra = 'piedra';
        $papel = 'papel';
        $tijera  = 'tijera';
        
        if ($userOption == $piedra && $cpuOption == $tijera || $userOption == $papel && $cpuOption == $piedra || $userOption == $tijera && $cpuOption == $papel){
            echo('Has ganado');
        }else{
            echo('Has perdido!');
        }
    }

    rockPaperOrSicissor($papel, $piedra);

?>