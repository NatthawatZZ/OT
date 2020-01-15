<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
use yii\helpers\Html;

?>
<style >
  .container-fluid{
    font-family: 'Kanit';
    font-size: 16px;
  }
</style>
  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-css.php'; ?>
  <?php //include Yii::app()->basePath .'/../themes/newdemo/include/inc-css.php'; ?>
  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-js.php'; ?>

  <div class="container">
    <div id="home" class="intro route bg-image"style="background-image: url(#fff)">
    <br><br><left><a href="index.php"><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/logo1.png'?>"  height="60"></a></left>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container-fluid">
              <div class="row" id="login">
                <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                <h1 style="font-size:40px;">เข้าสู่ระบบ</h1>
                </div>
                <div class="col-md-4">

                </div>
              </div>

      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <br>

        <div class="form">
      <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
          'validateOnSubmit'=>true,
        ),
      )); ?>
        <div class="form-group">
          <?php //echo $form->labelEx($model,'username'); ?>
          <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'อีเมลล์')); ?>
          <?php echo $form->error($model,'username'); ?>
        </div>
        <div class="form-group">
          <?php //echo $form->labelEx($model,'password'); ?>
          <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'รหัสผ่าน')); ?>
          <?php echo $form->error($model,'password'); ?>
        </div>
          <?php echo CHtml::submitButton('เข้าสู่ระบบ',array('class'=>'btn btn-block')); ?>
        <p>สมาชิกใหม่?
          <a href="index.php?r=TableMember/create">ลงทะเบียน</a><br>
          <!-- คลิกเพื่อสมัคร -->
          <a href="#">ลืมรหัสผ่าน?</a>
        </p>
      <?php $this->endWidget(); ?>
      </div><!-- form -->

      <div class="col-md-4"></div>
      </div><!-- ------- end row id login -------- -->
      </div><!-- ------- end class container-fluid -------- -->

        </div>
      </div>
    </div>
</div>
