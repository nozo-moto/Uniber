<?php

//座標値を住所に変換


function conv_addr($latitude, $longitude){
$GMAD = json_decode(@file_get_contents('http://maps.google.com/maps/api/geocode/json?latlng=' . 
    $latitude . ',' . $longitude . '&sensor=false&language=ja'), true);

$address = $GMAD['results'][0]['formatted_address'];

$address = preg_replace("/日本、〒[0-9]{3}-[0-9]{4} /","",$address);
// print($address);
return $address;
}
?>
