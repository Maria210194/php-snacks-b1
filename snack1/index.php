<?php

$basketScore = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => "55",
        "puntiOspite" => "60"
    ],
    [
        "squadraCasa" => "Inter",
        "squadraOspite" => "Milan",
        "puntiCasa" => "65",
        "puntiOspite" => "60"
    ],
    [
        "squadraCasa" => "Lazio",
        "squadraOspite" => "Genoa",
        "puntiCasa" => "50",
        "puntiOspite" => "50"
    ],
    [
        "squadraCasa" => "Roma",
        "squadraOspite" => "Fiorentina",
        "puntiCasa" => "25",
        "puntiOspite" => "50"
    ],
    [
        "squadraCasa" => "Spezia",
        "squadraOspite" => "Brescia",
        "puntiCasa" => "65",
        "puntiOspite" => "50"
    ]
    ];


    
// Olimpia Milano - Cantù | 55-60

for ($i=0; $i < count($basketScore) ; $i++){
    if(array_key_exists("squadraCasa", $basketScore[0])=== true){
        echo($basketScore[$i]["squadraCasa"]." - ".$basketScore[$i]["squadraOspite"]." | ".$basketScore[$i]["puntiCasa"]." - ".$basketScore[$i]["puntiOspite"] . "<br>");
    }else{
        echo("not found!");
    }
}

?>