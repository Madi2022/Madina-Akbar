<?php

include form.html;

$islands =[
    ["name" => "inhabit_island", "type" => "inhabit"],
    ["name" => "resourceable_island", "type" => "resourceable"],
    ["name" => "resourceless_island", "type" => "resourceless"],
    ["name" => "uninhabit_island", "type" => "uninhabit"],
    ["name" => "capturable_island", "type" => "capturable"],
    ["name" => "uncapturable_island", "type" => "uncapturable"],
      
];


function  checkType($islands){
    $message = [];
    foreach ($islands as $island){
        $name_of_island = $island["name"];
        if ($island["type"] == "inhabit" ) {
            array_push($message, "$name_of_island является обитаемым");
        };

        if($island["type"] == "uninhabit" ){
            array_push($message, "$name_of_island является необитаемым");
        };

        if ($island["type"] == "resourceable" ) {
            array_push($message, "$name_of_island является пригодным для припасов");
        };

        if ($island["type"] == "resourceless" ) {
            array_push($message, "$name_of_island является непригодным для припасов");
        };

        if ($island["type"] == "capturable" ) {
            array_push($message, "$name_of_island можно захватить");
        };

        if ($island["type"] == "uncapturable" ) {
            array_push($message, "$name_of_island невозможно захватить");
        };
        }
        
        return implode("\n",$message);
}

echo checkType($islands);


