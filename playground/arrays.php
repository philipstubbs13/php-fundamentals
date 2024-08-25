<?php

$list = array("id" => 4, 0, 10, "limit"=>24, 50);
$countries = ["Argentina", "Brazil", "Canada", "Denmark"];

echo count($list);

foreach ($countries as $i=>$country):
    echo "$i: $country\n";
endforeach;

for ($i=0; $i<count($countries); $i+=1) {
  
}

foreach ($countries as $country) { // for (let country of countries)
    echo "$country\n";
}

// echo $list["id"];
// echo $countries[2];
