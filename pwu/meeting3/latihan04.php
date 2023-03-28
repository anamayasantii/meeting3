<?php
    // $cars = array("volvo", "bmw", "toyota");

    // $cars[0] = "volvo";
    // $cars[1] = "bmw";
    // $cars[2] = "toyota";

    // header('Content-Type: application/json; charset=utf-8');
    // echo json_encode($cars);

    // $age = array("peter"=>"35", "ben"=>"37", "joe"=>"43");

    // $age['peter'] = "35";
    // $age['ben'] = "37";
    // $age['joe'] = "43";

    // header('Content-Type: application/json; charset=utf-8');
    // echo json_encode($age);

    $mhs = array(
        array("ardika", "2201010156", "denpasar"),
        array("wahyu", "2201010157", "denpasar"),
        array("zizi", "2201010158", "denpasar")
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($mhs);