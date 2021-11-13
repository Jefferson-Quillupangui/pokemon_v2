<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokedex/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);

    $data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokedex/'), true );
    

    foreach ($data['results'] as $clave => $valor) {       
        if( $valor['name'] == 'kanto' ){
            $region = $valor['name'];
            $datkanto = json_decode( file_get_contents($valor['url']), true );
        }    
    }

    curl_close($ch);
?>