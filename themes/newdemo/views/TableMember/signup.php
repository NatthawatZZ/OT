<style >
  .container-fluid{
    font-family: 'Kanit';
  }
</style>
<?php
$length = 10;
$chars = array_merge(range(0,9), range('a','z'), range('A','Z'));
shuffle($chars);
$password = implode(array_slice($chars, 0, $length));
 ?>
<div class="container">
  <div id="home" class="intro route bg-image"style="background-image: url(#fff)">
  <br><br><center><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/logo1.png'?>" width="270" height="78"></center>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container-fluid">
          <div class="row" id="signup">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h1 style="font-size:40px"> ลงทะเบียนผู้ใช้งาน </h1>
            </div>
            <div class="col-md-4"></div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <br>
        <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
         'id'=>'table-member-form',
          //'htmlOptions' => array('onsubmit' => 'SendSuccess()'),

         'enableAjaxValidation'=>false,
        )); ?>
       <?php //echo $form->errorSummary($model); ?>
       <div class="form-group">
         <?php //echo $form->labelEx($model,'psn_id',array('class'=>'txt1')); ?>
         <?php echo $form->dropDownList($model,'psn_id',CHtml::listData($employ,'psn_id','psn_per_id')
               ,array('class'=>'form-control'),
                 array('promt'=>'รหัสพนักงาน','psn_id'=>'employ')
               ); ?>

       </div>
       <div class="form-row">
         <?php //echo $form->labelEx($model,'mb_title',array('class'=>'txt1')); ?>
         <div class="col-4">
         <?php echo ZHtml::enumDropDownList($model,'mb_title',array('class'=>'form-control ')); ?>
         </div>
         <div class="col">
         <?php //echo $form->labelEx($model,'mb_name',array('class'=>'txt1')); ?>
         <?php echo $form->textField($model,'mb_name',array('class'=>'form-control','placeholder'=>'ชื่อ - นามสกุล')); ?>
         </div>
       </div>
       <div class="form-group">
         <?php //echo $form->labelEx($model,'mb_idcard',array('class'=>'txt1')); ?>
         <?php echo $form->textField($model,'mb_idcard',array('class'=>'form-control','placeholder'=>'หมายเลขบัตรประชาชน','maxlength'=>13)); ?>
       </div>

           <div class="form-group">
           <?php //echo $form->labelEx($model,'pst_id',array('class'=>'txt1')); ?>
           <?php echo $form->dropDownList($model,'pst_id',CHtml::listData($position,'pst_id','pst_name')
           ,array('class'=>'form-control'),
                   array('promt'=>'ตำแหน่ง','pst_id'=>'position')
                 ); ?>
         </div>
       <div class="form-group">
         <?php //echo $form->labelEx($model,'mb_email',array('class'=>'txt1')); ?>
         <?php echo $form->textField($model,'mb_email',array('class'=>'form-control','placeholder'=>'อีเมลล์')); ?>
       </div>
       <div class="form-group">
         <?php //echo $form->labelEx($model,'mb_mobile',array('class'=>'txt1')); ?>
         <?php echo $form->textField($model,'mb_mobile',array('class'=>'form-control','placeholder'=>'หมายเลขโทรศัพท์มือถือ','maxlength'=>10,'size'=>'30px')); ?>
       </div>
        <?php echo $form->hiddenField($model,'mb_password',array('class'=>'form-control','value'=>$password)); ?>
         <?php echo $form->hiddenField($model,'active',array('class'=>'form-control','value'=>'y')); ?>

       <div class="form-group">
         <?php echo CHtml::submitButton($model->isNewRecord ? 'สมัคร' : 'Save',array('class'=>'btn btn-lg btn-block','onclick'=>'SendSuccess();')); ?>

       </div>
     <?php $this->endWidget(); ?>
         </div>
         <div class="col-md-4"></div>
        </div>
     </div>

      </div>
    </div>
  </div>
</div>
<script>
  function SendSuccess() {
    // alert("Form submitted");
    Swal.fire(
        'Form submitted',
          'Thank you ',
          'success'
      )
  }
  </script>
