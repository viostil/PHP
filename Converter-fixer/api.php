<?php
    // config
    $key = '3bcf4b419cda6ad9097323b7dae10d75';
    $url = 'http://data.fixer.io/api/latest';

    //1) connect to fixer.io
    $data = file_get_contents($url . '?access_key=' . $key );


    //2) get currencies
    $currencies = json_decode( $data, true );


    $date = $currencies['date'];
    $usd = $currencies['rates']['USD'];
    $eur = $currencies['rates']['EUR'];
    $mdl = $currencies['rates']['MDL'];

    // print_r( $currencies);


 ?>
