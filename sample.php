<?php

//POSTのデータがJSONでなければこれでいい
$t=$_POST["name"];

//Connect to DB
$db=new PDO("sqlite:lit2.db");

$emaddr=$_POST["emaddr"];
//Send SQL to DB
$run=$db->query("SELECT * FROM login WHERE emaddr='$emaddr'");
//Error handle
if (!$run){print("error");return;}
//Load result
$result = $run->fetchAll(PDO::FETCH_NUM);

//uinfo is a row.
$uinfo=$result[0];
//get atribute
$a=$uinfo[4];

//Insert data
$run=$db->query("INSERT INTO login VALUES('$emaddr','$pass','$name',$birth,'')");
if (!$run){print("error");return;}



//JSON sample
$a = array('This','is','a','test','hello','world');
echo(json_encode($a));
echo "\n";
$d = array('foo' => 'bar', 'baz' => 'long');
echo(json_encode($d));
echo "\n";
?>