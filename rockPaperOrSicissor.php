<?php 
    $rock = 'rock';
    $paper = 'paper';
    $sicissor  = 'sicissor';

    function rockPaperOrSicissor($userOption, $cpuOption){
        $rock = 'rock';
        $paper = 'paper';
        $sicissor  = 'sicissor';
        
        if ($userOption == $rock && $cpuOption == $sicissor || $userOption == $paper && $cpuOption == $rock || $userOption == $sicissor && $cpuOption == $paper){
            echo('Has ganado');
        }else{
            echo('Has perdido!');
        }
    }

    rockPaperOrSicissor($paper, $rock);

?>