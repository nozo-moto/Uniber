<?php
$db = new PDO('sqlite:db/uniber.db');

$json_test = [
    "id" => "2",
    "res_time" => "201710100910",
    "res_latitude" => "135.00",
    "res_longitude" => "35",
    "comment" => "it's a comment"
];
$json_string = json_encode($json_test);

// $json_string = file_get_contents('php://input')
$obj = json_decode($json_string);

foreach($obj as $o){
    $uid = $obj->id;
    $res_time = $obj->res_time;
    $res_latitude = $obj->res_latitude;
    $res_longitude = $obj->res_longitude;
    $comment = $obj->comment;
}
$run=$db->prepare("insert into want_ride(uid, res_time, res_latitude, res_longitude, comment) values('1' ,'201710100910' ,'135.00' ,'35' ,'it's a comment' )");
if (!$run){
    print("err "."\n");
    return;
}
?>