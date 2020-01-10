<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>
  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-css.php'; ?>
  <?php //include Yii::app()->basePath .'/../themes/newdemo/include/inc-css.php'; ?>
  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-js.php'; ?>
  <center><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/logo1.png'?>" width="270" height="78"></center>
    <div class="container-fluid">

        <div class="row" id="login">
          <div class="col-md-4">
              </div>
              <div class="col-md-4">
          <h1>เข้าสู่ระบบ</h1>
          </div>
          <div class="col-md-4">

          </div>
        </div>

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <br>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Email')); ?>
		<?php //echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Password')); ?>
		<?php //echo $form->error($model,'password'); ?>
		<!-- <p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p> -->
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('เข้าสู่ระบบ',array('class'=>'btn btn-block')); ?>
	</div>
  <p>สมาชิกใหม่?
    <a href="signup.html">ลงทะเบียน</a> <br>
    <!-- คลิกเพื่อสมัคร -->
    <a href="#">ลืมรหัสผ่าน?</a>
  </p>


<?php $this->endWidget(); ?>
</div><!-- form -->

<div class="col-md-4">
</div>
</div><!-- ------- end row id login -------- -->
</div><!-- ------- end class container-fluid -------- -->

<br><br>
  <center><img src="image/logo1.png" width="270" height="78"></center>
  <div class="container-fluid">

    <div class="row" id="login">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <h1>เข้าสู่ระบบ</h1>
      </div>
      <div class="col-md-4">

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <br>

        <form action="#" method="POST">
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">Email / User name</label> -->
            <input type="email" class="form-control" id="psn_id" aria-describedby="emailHelp" placeholder="อีเมลล์">

          </div>
          <div class="form-group">
            <!-- <label for="exampleInputPassword1">Password</label> -->
            <input type="password" class="form-control" id="mb_idcard" placeholder="รหัสผ่าน"><!-- ยังไม่กำหนดตัวเลขที่จะใส่,ตัวเลขเท่านั้น หรือตัวอักษรด้วย? -->
          </div>


          <button type="submit" class="btn btn-block" >เข้าสู่ระบบ</button>
          <p>สมาชิกใหม่?
            <a href="signup.html">ลงทะเบียน</a> <br>
            <!-- คลิกเพื่อสมัคร -->
            <a href="#">ลืมรหัสผ่าน?</a>
          </p>

        </form>

      </div>
      <div class="col-md-4">
      </div>
    </div><!-- ------- end row id login -------- -->
  </div><!-- ------- end class container-fluid -------- -->
