<?php
$json_string = file_get_contents('php://input');
// $json_string='{
// "id": "name",
// "password" : "passpass"
// }';

$obj = json_decode($json_string, true);
$name=$obj["id"];


$db = new PDO('sqlite:db/uniber.db');

$result = $db->query("SELECT * FROM user where name = '$name'");
$row = $result->fetchAll(PDO::FETCH_NUM);

if (count($row)>0){
  echo(json_encode(array("result" => 1)));
}else{
  echo(json_encode(array("result" => 0)));
}

?>
