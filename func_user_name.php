<?php
function func_delete_matched_data($uid){
    $db = new PDO('sqlite:db/uniber.db');
    $uid_name = $db->query("SELECT name FROM user where id = '$uid'");
    while ($uid_name_row = $uid_name->fetchAll(PDO::FETCH_NUM)) {
        $username = $uid_name_row[0][0];
    }
    return $username;
}
?>