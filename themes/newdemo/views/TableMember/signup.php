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
  font-size: 0.75em;
}
  body{
    font-family: 'Kanit',san-serif;
  }
  label{
    font-weight: 400;
      font-size: 1rem;
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
  <!-- <form action="#" method="get" name="form"><br><br> -->
  <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
    'id'=>'table-member-form',
      //'htmlOptions' => array('onsubmit' => 'SendSuccess()'),
    'enableAjaxValidation'=>false,
  )); ?><br><br>
    <h1>ลงทะเบียน</h1>
<fieldset>
    <legend style="font-size:1.8rem;">กรอกข้อมูล</legend>
    <div class="form-group">
      <label for="exampleInputID">รหัสพนักงาน<b >*</b></label>
      <!-- <input type="text" class="form-control" id="psn_id" placeholder="รหัสพนักงาน"> -->
      <?php echo $form->textField($model,'psn_id',array('class'=>'form-control','placeholder'=>'รหัสพนักงาน'),CHtml::listData($employ,'psn_id','psn_per_id')); ?>
    </div>

    <div class="form-group">
      <label for="exampleInputID">รหัสผ่าน<b >*</b></label>
      <!-- <input type="password" class="form-control" id="#" placeholder="รหัสผ่าน"> -->
      <?php echo $form->textField($model,'mb_password',array('class'=>'form-control','placeholder'=>'รหัสผ่าน')); ?>
    </div>

    <div class="form-row">
      <div class="col-3">
      <label for="exampleInputtitle">คำนำหน้า<b >*</b></label>
      <?php echo ZHtml::enumDropDownList($model,'mb_title',array('class'=>'form-control ')); ?>
      </div>
      <div class="col">
      <label for="exampleInputName">ชื่อ-นามสกุล<b >*</b></label>
      <!-- <input type="text" class="form-control" id="mb_name" placeholder="ชื่อ - นามสกุล"> -->
        <?php echo $form->textField($model,'mb_name',array('class'=>'form-control','placeholder'=>'ชื่อ - นามสกุล')); ?>
    </div>
    </div>

    <div class="form-group">
      <label for="exampleInputIDCARD">หมายเลขบัตรประชาชน<b >*</b></label>
      <!-- <input type="password" class="form-control" id="mb_idcard" placeholder="หมายเลขบัตรประชาชน"> -->
      <?php echo $form->textField($model,'mb_idcard',array('class'=>'form-control','placeholder'=>'หมายเลขบัตรประชาชน','maxlength'=>13)); ?>
    </div>
    <div class="form-group">
      <label for="exampleInpuDepartment">ตำแหน่งงาน<b >*</b></label>
      <?php echo $form->dropDownList($model,'pst_id',CHtml::listData($position,'pst_id','pst_name')
      ,array('class'=>'form-control'),array('promt'=>'ตำแหน่ง','pst_id'=>'position')); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputE-mail">อีเมลล์<b >*</b></label>
      <!-- <input type="text" class="form-control" id="mb_email" placeholder="อีเมลล์"> -->
      <?php echo $form->emailField($model,'mb_email',array('class'=>'form-control','placeholder'=>'อีเมลล์')); ?>
    </div>

    <div class="form-group">
      <label for="exampleInputPhone">หมายเลขโทรศัพท์<b >*</b></label>
      <!-- <input type="text" class="form-control" id="mb_mobile" placeholder="หมายเลขโทรศัพท์"> -->
        <?php echo $form->textField($model,'mb_mobile',array('class'=>'form-control','placeholder'=>'หมายเลขโทรศัพท์','maxlength'=>10)); ?>
    </div>
        <?php echo $form->hiddenField($model,'active',array('class'=>'form-control','value'=>'y')); ?>
    <div class="form-group">
    <center>
      <!-- <button  href="index.php?r=site/login" class="btn btn-danger">ยกเลิก</button> &nbsp;&nbsp;&nbsp; -->
      <a href="index.php?r=site/login" class="btn btn-danger">ยกเลิก</a>
      <!-- <button type="submit" class="btn btn-primary">ลงทะเบียน</button> -->
    <?php echo CHtml::submitButton($model->isNewRecord ? 'ลงทะเบียน' : 'Save',array('class'=>'btn btn-primary')); ?>
    </center>
    </div>
</fieldset>
<!-- </form> -->
      <?php $this->endWidget(); ?>
</div>
  <div class="col-4">
  <img src="<?php echo Yii::app()->theme->baseUrl. '/inc/img/regis.png'?>" class="img1" width="175" height="300">
  </div>
  </div>
  </div>
  </body>
</html>
