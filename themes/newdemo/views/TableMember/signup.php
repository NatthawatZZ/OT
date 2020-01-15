<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ลงทะเบียน</title>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/inc/CSS/bootstrap.min.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/inc/CSS/signup.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/include/vendor/fontawesome-free/css/all.min.css');

Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/inc/js/jquery-3.3.1.min.js',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/inc/js/popper_1_14_3.min.js',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/inc/js/bootstrap.min.js',CClientScript::POS_HEAD);

?>
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
       crossorigin="anonymous"> -->
<style >
html{
  font-size: 0.8em;
}
  body{
    font-family: 'Kanit',san-serif;
  }
  label{
    font-weight: 400;
      font-size: 1.3rem;
  }

  .btn{
    font-size: 1.5rem;
  }
</style>
</head>
<body id="body1">
  <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <a class="navbar-brand text-white"><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/img/logo1.png'?>"></a>
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
  <div class="container-fluid">
    <div class="row">
    <div class="col-2">

    </div>
    <div class="col-5">
  <form action="#" method="get" name="form"><br><br>
    <h1>ลงทะเบียน</h1>
<fieldset>
    <legend style="font-size:2rem;">กรอกข้อมูล</legend>
    <div class="form-group">
      <label for="exampleInputID">รหัสพนักงาน<b >*</b></label>
      <input type="text" class="form-control" id="psn_id" placeholder="รหัสพนักงาน">
    </div>

    <div class="form-group">
      <label for="exampleInputID">รหัสผ่าน<b >*</b></label>
      <input type="password" class="form-control" id="#" placeholder="รหัสผ่าน">
    </div>

    <div class="form-row">
      <div class="col-2">
      <label for="exampleInputtitle">คำนำหน้า<b >*</b></label>
      <select class="form-control" id="mb_title">
            <option value="1">นาย</option>
            <option value="2">นาง</option>
            <option value="3">นางสาว</option>
        </select>
      </div>
      <div class="col">
      <label for="exampleInputName">ชื่อ - นามสกุล<b >*</b></label>
      <input type="text" class="form-control" id="mb_name" placeholder="ชื่อ - นามสกุล">
    </div>
    </div>


    <div class="form-group">
      <label for="exampleInputIDCARD">หมายเลขบัตรประชาชน<b >*</b></label>
      <input type="password" class="form-control" id="mb_idcard" placeholder="หมายเลขบัตรประชาชน">
    </div>
    <div class="form-group">
      <label for="exampleInpuDepartment">ตำแหน่งงาน<b >*</b></label>
      <select class="form-control" id="pst_id">
        <option value="0">ตำแหน่งงาน</option>
        <option value="1">Event Marketing Director</option>
        <option value="2">Creative Event Marketing Manage</option>
        <option value="3">Digital PR Manager</option>
        <option value="4">Human Resources Manager</option>
        <option value="5">Accounting</option>
        <option value="6">Digital PR & Event Marketing</option>
        <option value="7">Creative and Graphic Designer</option>
        <option value="8">Web and Graphic Designer</option>
        <option value="9">Systems Analyst</option>
        <option value="10">Programmer</option>
        <option value="11">Web Developer</option>
        <option value="12">Messenger</option>
    </select>
    </div>
    <div class="form-group">
      <label for="exampleInputE-mail">อีเมลล์<b >*</b></label>
      <input type="text" class="form-control" id="mb_email" placeholder="อีเมลล์">
    </div>

    <div class="form-group">
      <label for="exampleInputPhone">หมายเลขโทรศัพท์<b >*</b></label>
      <input type="text" class="form-control" id="mb_mobile" placeholder="หมายเลขโทรศัพท์">
    </div>
    <div class="form-group">
    <center>
      <button type="submit" class="btn btn-danger">ยกเลิก</button> &nbsp;&nbsp;&nbsp;
      <button type="submit" class="btn btn-primary">ลงทะเบียน</button></center>
    </div>
</fieldset>
</form>
</div>
  <div class="col-4">
  <img src="<?php echo Yii::app()->theme->baseUrl. '/inc/img/regis.png'?>" class="img1" width="175" height="300">
  </div>
  </div>
  </div>
  </body>
</html>
