<?php

$tabMonth = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];

echo $tabMonth[2] . "<br>";
echo $tabMonth[5] . "<br>";

$tabMonth[7] = "août";

$tabDep = [2 =>"Aisne" ,59 =>"Nord",60 =>"Oise",62=>"Pas-de-calais",80=> "Somme"];
echo $tabDep[59] . "<br>";

$tabDep[51] = "Marnes";

foreach($tabMonth as $value){
    echo $value . "<br>";
}

foreach($tabDep as $value => $key){
    echo $value . ":$key" . "<br>";
}
