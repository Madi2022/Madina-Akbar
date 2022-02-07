<?php
$islands = [
    "gunpowder" => ["name" => "gunpowder","resources" => "gunpowder", "needed" => "medicine"],
    "banana" => ["name" => "banana", "resources" => "banana", "needed" => "gunpowder"],
    "medicalherbs" => ["name" => "medicalherbs","resources" => "medicine", "needed" => "banana"],
    "unknown" => ["name" => "unknown","resources" => null, "needed" => null]
];
$my_ship = [
    "resources" => "banana",
    "needed" => "medicine"
];

print_r($islands["gunpowder"]);

function checkExchangeability($islands, $my_ship){
    foreach ($islands as $island){
        $name_of_island = $island["name"];
        if ($island["needed"] === $my_ship["resources"] && $island["resources"] === $my_ship["needed"]){
            echo "Exchange available with $name_of_island island \n";
        }
        echo "Exchange is not available with $name_of_island island \n";
    }
}

checkExchangeability($islands, $my_ship);