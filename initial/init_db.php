<?php
try {
    $pdo = new PDO('sqlite:./../db/uniber.db');

    $pdo->exec("CREATE TABLE IF NOT EXISTS user(
        id INTEGER PRIMARY KEY,
        name TEXT,
        home_latitude REAL,
        home_longitude REAL,
        have_car INTEGER check(have_car = 1 or have_car = 0)
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS supply_car(
        id INTEGER PRIMARY KEY,
        uid INTEGER,
        res_time INTEGER,
        res_latitude REAL,
        res_longitude REAL,
        comment TEXT
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS want_ride(
        id INTEGER PRIMARY KEY,
        uid INTEGER,
        res_time INTEGER,
        res_latitude REAL,
        res_longitude REAL,
        comment TEXT
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS matching(
        id INTEGER PRIMARY KEY,
        ride_user_id INTEGER,
        supply_id INTEGER,
        supply_uid INTEGER,
        supply_res_time INTEGER,
        supply_res_latitude REAL,
        supply_res_longitude REAL,
        supply_comment TEXT,
    )");

    }
catch (Exception $e) {
    echo $e->getMessage();
}
?>
