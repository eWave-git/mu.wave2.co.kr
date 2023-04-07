<?php
    $sql1 = "select * from mush.raw_data where address = 301 and board_number=2 order by create_at desc limit 1";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1);

    $sql2 = "select * from mush.raw_data where address = 301 and board_number=3 order by create_at desc limit 1";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);

    $sql3 = "select * from mush.raw_data where address = 401 and board_number=2 order by create_at desc limit 1";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_array($result3);

    $sql4 = "select * from mush.raw_data where address = 401 and board_number=3 order by create_at desc limit 1";
    $result4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_array($result4);


//    echo $row['tds_in'];
//    echo $row['tds_out'];
//    echo $row['pressure_in'];
//    echo $row['pressure_out'];
?>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        송화버섯 농장
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도</span>
                        <span class="info-box-number"><?php echo $row1['data1'];?> °C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row1['data1'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row1['create_at'],5,11);?> <!-- ($row['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도</span>
                        <span class="info-box-number"><?php echo $row1['data2'];?> %</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row1['data2'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row1['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">이산화탄소</span>
                        <span class="info-box-number"><?php echo $row1['data3'];?> ppm </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row1['data3'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row1['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">조도</span>
                        <span class="info-box-number"><?php echo $row2['data1'];?> lux</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row2['data1'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row2['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->

        </div>
        <!-- /.row -->
        <!-- Main row -->

        버섯버섯
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도</span>
                        <span class="info-box-number"><?php echo $row3['data1'];?> °C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row3['data1'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row3['create_at'],5,11);?> <!-- ($row2['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도</span>
                        <span class="info-box-number"><?php echo $row3['data2'];?> %</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row3['data2'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row3['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">이산화탄소</span>
                        <span class="info-box-number"><?php echo $row3['data3'];?> ppm </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row3['data3'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row3['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">조도</span>
                        <span class="info-box-number"><?php echo $row4['data1'];?> lux</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row4['data1'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row4['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->

        </div>
        <!-- /.row -->
        <!-- Main row -->


        <div class="row">



            <div class="col-lg-12 col-sm-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3"><h3 class="card-title">section </h3></li>
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">두람농장</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">-</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">-</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">-</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-two-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">

                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                     온도 변화량 (°C)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="TDS_chart" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    습도 변화량 (%)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="pressure_chart" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    이산화탄소 변화량 (ppm)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="water_chart" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    조도 변화량 (lux)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="throughput_chart" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    전력사용량 기간별 (W)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="power_chart" style="height: 300px;"></div>
                                            </div>
                                            <!-- /.card-body-->
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <!-- BAR CHART -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    물탱크 수위 (%)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="watertank_chart" style="height: 300px;"></div>
                                            </div>
                                            <!-- /.card-body-->
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                </div>
                            </div>



                            <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">

                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">

                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">

                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
            </div>

        </div>


        <!-- /.row (main row) -->
        <?php
            $sql = "select * from control_data where type='relay1' order by create_at desc limit 1";
            $result = mysqli_query($conn, $sql);
            $row1 = mysqli_fetch_array($result);

            $relay1 = !$row1['relay1'] && "" ? 0 : $row1['relay1'];


            if ($relay1 == 1) {
                $do_str_1 = "작동중";
                $do_css_1 = "bg-gradient-primary";
                $do_checked_1 = "checked";
            } else if ($relay1 == 0) {
                $do_str_1 = "멈춤";
                $do_css_1 = "bg-gradient-danger";
                $do_checked_1 = "";
            } else {
                $do_str_1 = "멈춤";
                $do_css_1 = "bg-gradient-danger";
                $do_checked_1 = "";
            }

            $sql = "select * from control_data where type='relay2' order by create_at desc limit 1";
            $result = mysqli_query($conn, $sql);
            $row2 = mysqli_fetch_array($result);

            $relay2 = !$row2['relay2'] && "" ? 0 : $row2['relay2'];


            if ($relay2 == 1) {
                $do_str_2 = "작동중";
                $do_css_2 = "bg-gradient-primary";
                $do_checked_2 = "checked";
            } else if ($relay2 == 0) {
                $do_str_2 = "멈춤";
                $do_css_2 = "bg-gradient-danger";
                $do_checked_2 = "";
            } else {
                $do_str_2 = "멈춤";
                $do_css_2 = "bg-gradient-danger";
                $do_checked_2 = "";
            }
        ?>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <!-- Bootstrap Switch -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">시스템 운영</h3>
                        <button type="button" name="control_button_1" class="btn btn-block <?php echo $do_css_1;?> btn-flat btn-sm" style="user-select: auto;"><?php echo $do_str_1;?></button>
                    </div>
                    <div class="card-body">
                        <input type="checkbox" name="control_checkbox_1" <?php echo $do_checked_1;?> data-bootstrap-switch>

                    </div>
                </div>
                <!-- /.card -->
            </div>

            <div class="col-lg-6 col-sm-12">
                <!-- Bootstrap Switch -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">시스템 운영</h3>
                        <button type="button" name="control_button_2" class="btn btn-block <?php echo $do_css_2;?> btn-flat btn-sm" style="user-select: auto;"><?php echo $do_str_2;?></button>
                    </div>
                    <div class="card-body">
                        <input type="checkbox" name="control_checkbox_2" <?php echo $do_checked_2;?> data-bootstrap-switch>

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>


    </div><!-- /.container-fluid -->
</section>
<script src="plugins/jquery/jquery.min.js"></script>

<script>
    $(function () {
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

        $("[name='control_checkbox_1']").on('switchChange.bootstrapSwitch',function (e,data) {
            $.ajax({
                url: "../conf/Ajaxcontrol.check.php",
                dataType: 'json',
                data: {relay:'relay1', do_work:data},
                success: function (data) {
                    const do_work = data.pay_load.do_work

                    if (do_work == 1) {
                        $("[name='control_button_1']").text('작동중')

                        $("[name='control_button_1']").addClass("bg-gradient-primary");
                        $("[name='control_button_1']").removeClass("bg-gradient-danger");
                    } else if (do_work == 0) {
                        $("[name='control_button_1']").text('멈춤')

                        $("[name='control_button_1']").addClass("bg-gradient-danger");
                        $("[name='control_button_1']").removeClass("bg-gradient-primary");
                    } else {
                        $("[name='control_button_1']").text('멈춤')

                        $("[name='control_button_1']").addClass("bg-gradient-danger");
                        $("[name='control_button_1']").removeClass("bg-gradient-primary");
                    }
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        });

        $("[name='control_checkbox_2']").on('switchChange.bootstrapSwitch',function (e,data) {
            $.ajax({
                url: "../conf/Ajaxcontrol.check.php",
                dataType: 'json',
                data: {relay:'relay2', do_work:data},
                success: function (data) {
                    const do_work = data.pay_load.do_work

                    if (do_work == 1) {
                        $("[name='control_button_2']").text('작동중')

                        $("[name='control_button_2']").addClass("bg-gradient-primary");
                        $("[name='control_button_2']").removeClass("bg-gradient-danger");
                    } else if (do_work == 0) {
                        $("[name='control_button_2']").text('멈춤')

                        $("[name='control_button_2']").addClass("bg-gradient-danger");
                        $("[name='control_button_2']").removeClass("bg-gradient-primary");
                    } else {
                        $("[name='control_button_2']").text('멈춤')

                        $("[name='control_button_2']").addClass("bg-gradient-danger");
                        $("[name='control_button_2']").removeClass("bg-gradient-primary");
                    }
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        });

        GetTDSData()

        function GetTDSData() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/AjaxTDS.data.php",
                dataType: 'json',
                success: function (data) {
                    TDSupdate(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function TDSupdate(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#TDS_chart', [dataset['tds_in'],dataset['tds_out']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }


        GetPressureData()

        function GetPressureData() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/AjaxPressure.data.php",
                dataType: 'json',
                success: function (data) {
                    Pressureupdate(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function Pressureupdate(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#pressure_chart', [dataset['pressure_in'],dataset['pressure_out']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }

        GetWaterData()

        function GetWaterData() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/AjaxWater.data.php",
                dataType: 'json',
                success: function (data) {
                    Waterupdate(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function Waterupdate(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#water_chart', [dataset['water_in'],dataset['water_out']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }

        GetThroughputData()

        function GetThroughputData() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/AjaxThroughput.data.php",
                dataType: 'json',
                success: function (data) {
                    Throughputupdate(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function Throughputupdate(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#throughput_chart', [dataset['throughput']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }

        GetPowerData()

        function GetPowerData() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/AjaxPower.data.php",
                dataType: 'json',
                success: function (data) {
                    Powerupdate(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function Powerupdate(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#power_chart', [dataset['power']], {
                grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                },
                series: {
                    bars: {
                        show: true, barWidth: 0.5, align: 'center',
                    },
                },
                colors: ['#3c8dbc'],
                xaxis : {
                    ticks: _data.pay_load.create_at,
                }
            })
        }

        GetWaterTankData()

        function GetWaterTankData() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/AjaxWaterTank.data.php",
                dataType: 'json',
                success: function (data) {
                    GetWaterTankupdate(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function GetWaterTankupdate(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#watertank_chart', [dataset['watertank']], {
                grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                },
                series: {
                    bars: {
                        show: true, barWidth: 0.5, align: 'center',
                    },
                },
                colors: ['#3c8dbc'],
                xaxis : {
                    ticks: _data.pay_load.create_at,
                }
            })
        }

    });
</script>
