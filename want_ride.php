<?php
try{
    $db = new PDO('sqlite:db/uniber.db');
    $json_string = file_get_contents('php://input');
    $obj = json_decode($json_string);
    foreach($obj as $o){
        $uid = $obj->id;
        $res_time = $obj->res_time;
        $res_latitude = $obj->res_latitude;
        $res_longitude = $obj->res_longitude;
        $comment = $obj->comment;
    }

    $run = $db->query("insert into want_ride(uid, res_time, res_latitude, res_longitude) values('$uid' ,'$res_time' ,'$res_latitude' ,'$res_longitude' )");
    if (!$run){
        print("err "."\n");
        return;
    }
    echo json_encode(array("result" => 1));
}
catch (Exception $e){
    echo json_encode(array("result" => 0));
}

?>