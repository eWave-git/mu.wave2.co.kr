<?php



include_once "../connect.php";



foreach ($_REQUEST as $k => $v) {
    $$k = $v;
}


function createdTable_1($rows, $field_1, $field_2) {
    echo "<table>";
    echo "<tr><td>{$field_1}</td><td>{$field_2}</td></tr>";
    foreach ($rows as $k => $v) {
        ?>
        <tr>
            <td><?php echo round($v[$field_1],2)?></td><td><?php echo substr( $v[$field_2],0,16)?></td>
        </tr>
        <?php
    }
    echo "</table>";
}

if ($md_id && $sensor && $sdateAtedate) {

    $file_name = $sensor."_excel.xls";

    header( "Content-type: application/vnd.ms-excel; charset=utf-8");
    header( "Content-Disposition: attachment; filename = $file_name" );     //filename = 저장되는 파일명을 설정합니다.
    header( "Content-Description: PHP4 Generated Data" );


    $s = explode(" - ",$sdateAtedate );
    $sdate = $s[0]." 00:00:00";
    $edate = $s[1]." 23:59:59";

    if ($sensor == "TDSIN") {
        $query = "
        select
            DATE_FORMAT(create_at, '%Y-%m-%d %H:%i:00') as DATE,
            avg(data1) as data1
        from raw_data
        where create_at >= '{$sdate}' and create_at <= '{$edate}'
        group by DAY(create_at),FLOOR(MINUTE(create_at)/1)*10
        order by DATE asc
    ";

        $result = mysqli_query($conn, $query);
        $rows = array();
        while($row = mysqli_fetch_array($result))
            $rows[] = $row;

        createdTable_1($rows, 'data1','DATE');


    } else if ($sensor == "TDSOUT") {
        $query = "
            select
                DATE_FORMAT(create_at, '%Y-%m-%d %H:%i:00') as DATE,
                avg(data2) as data2
            from raw_data
            where create_at >= '{$sdate}' and create_at <= '{$edate}'
            group by DAY(create_at),FLOOR(MINUTE(create_at)/1)*10
            order by DATE asc
        ";

        $result = mysqli_query($conn, $query);
        $rows = array();
        while($row = mysqli_fetch_array($result))
            $rows[] = $row;

        createdTable_1($rows, 'data2','DATE');

    } else if ($sensor == "PRESSUREIN") {
        $query = "
            select
                DATE_FORMAT(create_at, '%Y-%m-%d %H:%i:00') as DATE,
                avg(data3) as data3
            from raw_data
            where create_at >= '{$sdate}' and create_at <= '{$edate}'
            group by DAY(create_at),FLOOR(MINUTE(create_at)/1)*10
            order by DATE asc
        ";

        $result = mysqli_query($conn, $query);
        $rows = array();
        while($row = mysqli_fetch_array($result))
            $rows[] = $row;

        createdTable_1($rows, 'data3','DATE');

    } else if ($sensor == "PRESSUREOUT") {
        $query = "
            select
                DATE_FORMAT(create_at, '%Y-%m-%d %H:%i:00') as DATE,
                avg(data4) as data4
            from raw_data
            where create_at >= '{$sdate}' and create_at <= '{$edate}'
            group by DAY(create_at),FLOOR(MINUTE(create_at)/1)*10
            order by DATE asc
        ";

        $result = mysqli_query($conn, $query);
        $rows = array();
        while($row = mysqli_fetch_array($result))
            $rows[] = $row;

        createdTable_1($rows, 'data4','DATE');

    } else if ($sensor == "WATERIN") {

        $query = "
            select
                DATE_FORMAT(create_at, '%Y-%m-%d %H:%i:00') as DATE,
                avg(data5) as data5
            from raw_data
            where create_at >= '{$sdate}' and create_at <= '{$edate}'
            group by DAY(create_at),FLOOR(MINUTE(create_at)/1)*10
            order by DATE asc
        ";

        $result = mysqli_query($conn, $query);
        $rows = array();
        while($row = mysqli_fetch_array($result))
            $rows[] = $row;

        createdTable_1($rows, 'data5','DATE');

    } else if ($sensor == "WATEROUT") {

        $query = "
            select
                DATE_FORMAT(create_at, '%Y-%m-%d %H:%i:00') as DATE,
                avg(data6) as data6
            from raw_data
            where create_at >= '{$sdate}' and create_at <= '{$edate}'
            group by DAY(create_at),FLOOR(MINUTE(create_at)/1)*10
            order by DATE asc
        ";

        $result = mysqli_query($conn, $query);
        $rows = array();
        while($row = mysqli_fetch_array($result))
            $rows[] = $row;

        createdTable_1($rows, 'data6','DATE');

    } else if ($sensor == "THROUGHPUT") {

        $query = "
            select
                DATE_FORMAT(create_at, '%Y-%m-%d %H:%i:00') as DATE,
                avg(data7) as data7
            from raw_data
            where create_at >= '{$sdate}' and create_at <= '{$edate}'
            group by DAY(create_at),FLOOR(MINUTE(create_at)/1)*10
            order by DATE asc
        ";

        $result = mysqli_query($conn, $query);
        $rows = array();
        while($row = mysqli_fetch_array($result))
            $rows[] = $row;

        createdTable_1($rows, 'data7','DATE');

    } else if ($sensor == "POWER") {
        // 모름

    }


}
