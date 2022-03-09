<?php
    //function php
    function lulus(){
        $nilai = 80;
        if($nilai >=75){
            $ket = 'Lulus';
        }else{
            $ket = 'Tidak Lulus';
        }
        return $ket;
    }
    //memanggil function
    echo lulus();
?>