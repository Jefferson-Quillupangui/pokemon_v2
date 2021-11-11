<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokedex/2/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);

    $data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokedex/2/'), true );

    curl_close($ch);
?>