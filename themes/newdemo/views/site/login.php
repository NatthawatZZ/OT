<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
  <?php include Yii::app()->basePath .'/../themes/newdemo/include/linkbs.php';?>

  <title>เข้าสู่ระบบ</title>
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">


</head>
<body id="bg">
  <div class="container-fluid">

    <nav class="navbar navbar-expand-md navbar-dark bg-white fixed-top">
      <br><br><left><a href="index.php"><img src="<?php echo Yii::app()->theme->baseUrl.'/include/img/logo1.png'?>"  height="60"></a></left>

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

        <?php $form=$this->beginWidget('CActiveForm', array(
          'id'=>'login-form',
          'enableClientValidation'=>true,
          'clientOptions'=>array(
            'validateOnSubmit'=>true,
          ),
        )); ?>
  <div class="contain">
    <div class="row">

      <div class="col-md-12">
        <div class="card" id="logincontain">
          <!-- <img class="card-img-top" src="include/img/Untitled-2-01.jpg" alt="Card image cap"> -->
          <img class="card-img-top" src="<?php echo Yii::app()->theme->baseUrl.'/include/img/Untitled-2-01.jpg'?>" alt="Card image cap">

          <div class="card-body">
            <h1 style="color:#034791" class="text-center">เข้าสู่ระบบ</h1>


            <form action="#" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">รหัสพนักงาน</label>
                <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'รหัสพนักงาน')); ?>
                <?php echo $form->error($model,'username'); ?>

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">รหัสผ่าน</label>
                <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'รหัสผ่าน')); ?>
                <?php echo $form->error($model,'password'); ?>
              </div>


              <button type="submit" class="btn btn-block"><span style="color:#fff;">เข้าสู่ระบบ</span></button>
              <p>สมาชิกใหม่?
                <!-- <a href="index.php?r=TableMember/create">ลงทะเบียน</a> <br> -->
                  <a href="index.php?r=TableMember/create">ลงทะเบียน</a><br>
                <!-- คลิกเพื่อสมัคร -->

                <a href="getpassword.php">ลืมรหัสผ่าน?</a>
                  <?php $this->endWidget(); ?>
              </p>

            </form>
          </div>
        </div>
      </div><!-- ------- end row id login -------- -->

    </div><!-- ------- end class container-fluid -------- -->


</body>
</html>
