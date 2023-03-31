<?php
include_once "../connect.php";

$query = "
select
(
   SELECT data3
   FROM raw_data
   WHERE board_number=2
   order by create_at desc limit 1
   ) AS data1,
 (
    SELECT data3
   FROM raw_data
   WHERE board_number=3
   order by create_at desc limit 1
   ) AS data2,
(
    SELECT data3
   FROM raw_data
   WHERE board_number=4
   order by create_at desc limit 1
   ) AS data3,
   (
    SELECT data3
   FROM raw_data
   WHERE board_number=5
   order by create_at desc limit 1
   ) AS data4,
   (
   SELECT data3
   FROM raw_data
   WHERE board_number=6
   order by create_at desc limit 1
   ) AS data5
";
$result = mysqli_query($conn, $query);
$rows = array();
while($row = mysqli_fetch_array($result))
    $rows[] = $row;

$watertank_arr = array();

$create_at_arr = array();


    array_push($watertank_arr, array(0, floor($rows[0]['data1'])));
    array_push($watertank_arr, array(1, floor($rows[0]['data2'])));
    array_push($watertank_arr, array(2, floor($rows[0]['data3'])));
    array_push($watertank_arr, array(3, floor($rows[0]['data4'])));
    array_push($watertank_arr, array(3, floor($rows[0]['data5'])));


    array_push($create_at_arr, array(0, '2번'));
    array_push($create_at_arr, array(1, '3번'));
    array_push($create_at_arr, array(2, '4번'));
    array_push($create_at_arr, array(3, '5번'));
    array_push($create_at_arr, array(4, '6번'));



$watertank = array(
    'data' => $watertank_arr,
    'bars' => array('show'=>true,),
);


//echo "<xmp>";
//print_r($watertank);
//echo "</xmp>";


$response = array();
$response['pay_load']['success'] = "success";
$response['pay_load']['dataset'] = array('watertank'=>$watertank,);
$response['pay_load']['create_at'] = $create_at_arr;

echo json_encode($response);

?>