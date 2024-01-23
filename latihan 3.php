
<?php

function laluLintas($nolintas, $kondisiTerminasi, $ktm1, $ktm2, $ktm3, $ktm4, $ktm5, $ktm6,$ktm7,$ktm8, $ktm9,$ktm10){
    for ($nolintas; $nolintas <= $kondisiTerminasi; $nolintas++){
        if($nolintas == $ktm3 || $nolintas == $ktm5 || $nolintas == $ktm7 || $nolintas == $ktm8){
            echo "Lampu lalu lintas no $nolintas Tidak berfungsi <br/>";
        } elseif($nolintas == $ktm1 || $nolintas == $ktm2 || $nolintas == $ktm7 || $nolintas == $ktm10){
            echo "Lampu lalu lintas no $nolintas Tidak lancar <br/>";
        } elseif (   $nolintas == $ktm9){
            echo "Lampu lalu lintas no $nolintas Sedang diperbaiki<br/>";
        }
        else {
            echo "Lampu lalu lintas no $nolintas Lancar <br/>";
     }
    }
}
echo laluLintas(1,20,2,4,5,10,11,12,13,14,16,18)
/////////////////////////////////////////////////




?>