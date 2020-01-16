<!DOCTYPE html>
<html lang="en">

<head>
    <?php //include("linkbs.php"); ?>
    <?php include Yii::app()->basePath .'/../themes/newdemo/include/linkbs.php';?>
    <title>ยืนยันรหัสผ่าน</title>
</head>

<body id="bgg">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
            <a class="navbar-brand text-white"><img src="<?php echo Yii::app()->theme->baseUrl.'/include/img/logo1.png'?>"></a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><br>
                        <h5>ระบบขอเบิกค่า OT และ ค่าเดินทาง</h5>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <div class="container-fluid" id="fgpass">
        <div class="col-md-12" style="margin-top: 140px;">
            <br>
        </div>
        <!-- ..................................... -->
        <div class="row" id="btn">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <br>
                    <h1 style="text-align: center; color: #034791">รหัสผ่านใหม่</h1>
                    <hr>
                    <div class="card-body">
                        <p style="text-align: left">รหัสผ่านใหม่ <b>* </b></p>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="รหัสผ่านใหม่">
                        <br>
                        <p style="text-align: left">ยืนยันรหัสผ่าน <b>* </b></p>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ยืนยันรหัสผ่าน">
                        <br>
                        <center>
                            <a class="btn btn-warning" href="index.php">ยืนยัน
                            </a>
                            <center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    </div>
</body>

</html>
