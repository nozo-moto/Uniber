<?php
 
/*
** 緯度経度取得及び設定
*/

function conv_addr($latitude,$longitude){

 
/*
** jsonデータ取得
*/
 
 $GMAD = json_decode(@file_get_contents('http://maps.google.com/maps/api/geocode/json?latlng=' . 
        $latitude . ',' . $longitude . '&sensor=false&language=ja'), true);

//  var_dump($GMADs);
/*
** 住所取得
*/
// $addresses = array();
 
    // var_dump($GMAD);
 $address = $GMAD['results'][0]['formatted_address'];

$address = preg_replace("/日本、〒[0-9]{3}-[0-9]{4} /","",$address);
return $address;
}
?>