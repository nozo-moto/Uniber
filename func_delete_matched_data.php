<?php

//座標値を住所に変換
function func_delete_matched_data($supply_car_id,$want_ride_id){
    $db = new PDO('sqlite:db/uniber.db');
    $run=$db->query("delete from supply_car where id = '$supply_car_id';");
    $run=$db->query("delete from want_ride where id = '$want_ride_id';");
}
?>