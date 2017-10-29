<?php
require "func_delete_matched_data.php";

try{
    $db = new PDO('sqlite:db/uniber.db');
    $json_string = file_get_contents('php://input');
    $obj = json_decode($json_string);
    $ride_user_id = $obj->id;
    $supply_car_id = $obj->supply_car_id;
    
    $result = $db->query("SELECT * FROM supply_car where id = '$supply_car_id' ");
    while ($row = $result->fetchAll(PDO::FETCH_NUM)) {
        foreach($row as $data){
            $supply_id = $data[0];
            $supply_uid = $data[1];
            $supply_res_time = $data[2];
            $supply_res_latitude = $data[3];
            $supply_res_longitude = $data[4];
        }
    }
    
    $run = $db->query("insert into matching(
        ride_user_id,
        supply_id,
        supply_uid,
        supply_res_time,
        supply_res_latitude,
        supply_res_longitude
        ) values(
            '$ride_user_id',
            '$supply_id',
            '$supply_uid',
            '$supply_res_time',
            '$supply_res_latitude',
            '$supply_res_longitude'
            )");
    if (!$run){
        echo(json_encode(array("result" => 0))); 
        return;
    }

    func_delete_matched_data($supply_car_id);

    echo(json_encode(array("result" => 1)));
}
catch (Exception $e){
    echo(json_encode(array("result" => 0)));
}

?>
