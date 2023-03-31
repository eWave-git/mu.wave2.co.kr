<?php
include_once "../connect.php";

$query = "
select
    DATE_FORMAT(create_at, '%m-%d %H:%i') as DATE,
    data3
from raw_data
where
    address = 991 and board_number = 5    
order by DATE desc
limit 30;
";
$result = mysqli_query($conn, $query);
$rows = array();
while($row = mysqli_fetch_array($result))
    $rows[] = $row;


$throughput_arr = array();

$create_at_arr = array();

foreach ($rows as $k => $v) {
    array_push($throughput_arr, array($k, floor($v['data3'])));
    array_push($create_at_arr, array($k, substr($v['DATE'],11,5)));
}

$throughput = array(
    'data' => $throughput_arr,
    'color'=>'#3c8dbc',
);


//echo "<xmp>";
//print_r($throughput);
//echo "</xmp>";

$response = array();
$response['pay_load']['success'] = "success";
$response['pay_load']['dataset'] = array('throughput'=>$throughput,);
$response['pay_load']['create_at'] = $create_at_arr;

echo json_encode($response);

?>
