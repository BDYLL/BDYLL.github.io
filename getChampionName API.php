<?php
    $idChampion = $_POST['idChampionData'];
    $region = $_POST['regionData'];
    $apiKey = 'RGAPI-72acc322-da7e-48d9-a795-025aef0eeed3';

    //inicializa el que tomará los valores del API.
    $ch = curl_init();
    $ch = curl_init('https://global.api.pvp.net/api/lol/static-data/'.$region.'/v1.2/champion/'.$idChampion.'?api_key='.$apiKey);

    //Request example
    //https://global.api.pvp.net/api/lol/static-data/lan/v1.2/champion/15?api_key=RGAPI-72acc322-da7e-48d9-a795-025aef0eeed3

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Aqui se guarda el valor que el recibe.
    $stringResult = curl_exec($ch);

    //echo $stringResult;

    //Valor hardcodeado
    $stringResult = '{"id": 15,"title": "la Señora de la Batalla","name": "Sivir","key": "Sivir"}';

    echo $stringResult;
?>