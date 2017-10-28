<?php
$db = new PDO('sqlite:db/uniber.db');
$result = $db->query('SELECT * FROM user');
$result_array = array();
while ($row = $result->fetchAll(PDO::FETCH_NUM)) {
    foreach($row as $data){
        $id = $data[0];
        $uname = $data[1];
        $res_latitude = $data[2];
        $res_longitude = $data[3];
        $have_car = $data[4];
        $array_before = array(
                            "id" => $data[0],
                            "uname" => $data[1],
                            "res_latitude" => $data[2],
                            "res_longitude" => $data[3],
                            "have_car" => $data[4]
                         );
        array_push($result_array, $array_before);
    }
}
$result_json = json_encode($result_array);
echo($result_json);
?>