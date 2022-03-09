<?php 

    //mendeklarasikan array buah
    $buah = [
        'p' => 'Pisang',
        'a' => 'Apel',
        'j' => 'Jeruk',
        'm' => 'Mangga',
        'k' => 'Kelapa'
    ];

    //menampilkan array dengan foreach  dengan list
    echo '<ol>';
    foreach ($buah as $b => $value) {
        echo '<li>'.$b.' => '.$value.'</li>';
    }
    echo '</ol>';

    echo '<hr>';
    sort($buah);

    //menampilkan array dengan foreach
    echo '<ul>';
    foreach ($buah as $b => $value) {
        echo '<li>'.$b.' => '.$value.'</li>';
    }
    echo '</ul>';
?>