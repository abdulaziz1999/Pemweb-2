<?php
    //function luas segitiga
    function segitiga($a,$t){
        $luas = 1/2*$a*$t;
        return $luas;
    }

    //function luas persegi panjang
    function persegiPanjang($p,$l){
        $rumus = $p * $l;
        return $rumus;
    }

    //function volume kubus
    function kubus($sisi){
        $volum = $sisi * $sisi * $sisi;
        return $volum;
    }

    //function volume balok
    function balok($p,$l,$t){
        $v = $p * $l * $t;
        return $v;
    }
?>