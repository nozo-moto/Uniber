<?php
$db = new PDO('sqlite:db/uniber.db');
$result = $db->query('SELECT * FROM user');
$result_array = array();
while ($row = $result->fetchAll(PDO::FETCH_NUM)) {
    foreach($row as $data){
        $id = $data[0];
        $uname = $data[1];
        $home_latitude = $data[2];
        $home_longitude = $data[3];
        $have_car = $data[4];
        $array_before = array(
                            "id" => $id,
                            "uname" => $uname,
                            "home_latitude" => $home_latitude,
                            "home_longitude" => $home_longitude,
                            "have_car" => $have_car
                         );
        array_push($result_array, $array_before);
    }
}
$result_json = json_encode($result_array);
echo($result_json);
?>