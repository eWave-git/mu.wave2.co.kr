<?php
//print_r($_REQUEST);
include_once "../connect.php";

$response = array();

foreach ($_REQUEST as $k => $v) {
    $$k = $v;
}

if ($mode == "select") {
    $query = "SELECT * FROM `member` WHERE idx='{$idx}' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $response['pay_load']['success'] = "success";
        $response['pay_load']['result'] = $row;
    }

    echo json_encode($response);

} else if ($mode == "create") {

    $sql = "SELECT CONCAT('*', UPPER(SHA1(UNHEX(SHA1('{$password}'))))) as pass";
    $result = mysqli_query($conn, $sql);
    $row_p = mysqli_fetch_array($result);
    $password = $row_p['pass'];
    $description = $description != '' ? $description : "";

    $query = "INSERT INTO `member` SET id='{$id}',
        name='{$name}',
        password='{$password}',
        `type`='{$type}',
        description='{$description}',
        device_id='{$device_id}',
        create_at=now() ";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $response['pay_load']['success'] = "success";
        $response['pay_load']['result'] = $result;
    }

    echo json_encode($response);

} else if ($mode == "edit") {

    if ($password) {
        $sql = "SELECT CONCAT('*', UPPER(SHA1(UNHEX(SHA1('{$password}'))))) as pass";
        $result = mysqli_query($conn, $sql);
        $row_p = mysqli_fetch_array($result);
        $password = $row_p['pass'];
        $sql_sub = ", password='".$password."'";
    }

    $query = "UPDATE `member` SET id='{$id}',
            name='{$name}' ".$sql_sub.",
            `type`='{$type}', 
            description='{$description}',
            device_id='{$device_id}'
            WHERE idx='{$idx}' ";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $response['pay_load']['success'] = "success";
        $response['pay_load']['result'] = $result;
    }

    echo json_encode($response);

} else if ($mode == "delete") {

    $query = "DELETE FROM `member` WHERE idx='{$idx}' ";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $response['pay_load']['success'] = "success";
        $response['pay_load']['result'] = $result;
    }

    echo json_encode($response);
}


