<?php

$data = '1994-11-28';

function diaDaSemana ($data){

    $res = date('l', strtotime($data));
    switch($res) {
        case 'Monday':
            echo 'Segunda - Feira';
            break;
        case 'Tuesday':
            echo 'Terça - Feira';
            break;  
        case 'Wednesday':
            echo 'Quarta - Feira';
            break;  
        case 'Thursday':
            echo 'Quinta - Feira';
            break; 
        case 'Friday':
            echo 'Sexta - Feira';
            break;        
        case 'Saturday':
            echo 'Sabado';
            break;       
        case 'Sunday':
            echo 'Domingo';
            break;
    }
    return;
}

echo diaDaSemana($data);

