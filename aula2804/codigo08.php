<?php
function mes_do_ano($mes){
    switch($mes){
        case 1:
            return 'janeiro';
            break;
        case 2:
            return 'fevereiro';
            break;
        case 3:
            return 'março';
            break;
        case 4:
            return 'abril';
            break;
        case 5:
            return 'maio';
            break;
        case 6:
            return 'junho';
            break;        
        case 7:
            return 'julho';
            break;
        case 8:
            return 'agosto';
            break;
        case 9:
            return 'setembro';
            break;
        case 10:
            return 'outubro';
            break;
        case 11:
            return 'novembro';
            break;
        case 12:
            return 'dezembro';
            break;        
    }
}

function retorna_data(){
    $agora = time();
    $data = getdate($agora);
    $dia = $data['mday'];
    $mes = $data['mon'];
    $ano = $data['year'];
    $hora = $data['hours'];
    $minuto = $data['minutes'];
    $mes_do_ano = mes_do_ano($mes);
    return "Mogi Mirim, $dia de $mes_do_ano de $ano, são $hora horas e $minuto minutos \n";
}

echo retorna_data();
