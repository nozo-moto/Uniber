<?php
$json_string = file_get_contents('php://input');

// $json_string='{
// "name": "user name",
// "home_latitude" : "135.00",
// "home_longitude" : "35.00",
// "have_car" : "1"
// }';
$obj = json_decode($json_string, true);

$name=$obj["name"];
$home_latitude=$obj["home_latitude"];
$home_longitude=$obj["home_longitude"];
$have_car=$obj["have_car"];


$db=new PDO("sqlite:db/uniber.db");
$run=$db->query("INSERT INTO user(name,home_latitude,home_longitude,have_car) VALUES('$name','$home_latitude','$home_longitude','$have_car')");
if (!$run){
  print('{"result":"0"}');
}else{
  print('{"result":"1"}');
}

?>