<?php
require "func_conv_addr.php";
$db = new PDO('sqlite:db/uniber.db');

$result = $db->query('SELECT * FROM want_ride');
$result_array = array();
while ($row = $result->fetchAll(PDO::FETCH_NUM)) {
    foreach($row as $data){
        $id = $data[0];
        $uid = $data[1];
        $res_time = $data[2];
        $res_latitude = $data[3];
        $res_longitude = $data[4];
        
        $uid_name = $db->query("SELECT name FROM user where id = '$uid'");
        while ($uid_name_row = $uid_name->fetchAll(PDO::FETCH_NUM)) {
            $username = $uid_name_row[0][0];
        }
        $address = conv_addr($res_latitude, $res_longitude);

        $array_before = array(
                            "id" => $id,
                            "uname" => $username,
                            "res_time" => $res_time,
                            "res_latitude" => $res_latitude,
                            "res_longitude" => $res_longitude,
                            "address" => $address
                        );
        array_push($result_array, $array_before);
    }
}
$result_json = json_encode($result_array);
echo($result_json);
?>
