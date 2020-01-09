<main id="content" >
   <div class="container-fluid">
     <div class="row" id="signup">
       <div class="col-md-4"></div>
       <div class="col-md-4">
         <h1> ลงทะเบียนผู้ใช้งาน </h1>
       </div>
       <div class="col-md-4"></div>
     </div>
     <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
         <br>
   <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
    'id'=>'table-member-form',
     // 'htmlOptions' => array('class' => 'login100-form validate-form flex-sb flex-w'),
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
    <?php echo ZHtml::enumDropDownList($model,'mb_title',array('class'=>'form-control')); ?>
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
      <?php //echo $form->textField($model,'pst_id',array('class'=>'input100','placeholder'=>'ตำแหน่ง')); ?>
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
    <?php echo $form->textField($model,'mb_mobile',array('class'=>'form-control','placeholder'=>'หมายเลขโทรศัพท์มือถือ','maxlength'=>10)); ?>
  </div>
    <?php //echo $form->labelEx($model,'created_date',array('class'=>'txt1')); ?>
    <?php echo $form->hiddenField($model,'created_date',array('class'=>'input100')); ?>

    <?php //echo $form->labelEx($model,'created_by',array('class'=>'txt1')); ?>
    <?php echo $form->hiddenField($model,'created_by',array('class'=>'input100')); ?>

    <?php //echo $form->labelEx($model,'update_date',array('class'=>'txt1')); ?>
    <?php echo $form->hiddenField($model,'update_date',array('class'=>'input100')); ?>
    <?php //echo $form->labelEx($model,'update_by',array('class'=>'txt1')); ?>
    <?php echo $form->hiddenField($model,'update_by',array('class'=>'input100')); ?>


    <?php //echo $form->labelEx($model,'active',array('class'=>'txt1')); ?>
    <?php echo $form->hiddenField($model,'active',array('class'=>'input100','value'=>'y')); ?>

  <div class="form-group">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'สมัคร' : 'Save',array('class'=>'btn btn-lg btn-primary')); ?>

  </div>
<?php $this->endWidget(); ?>
    </div>
    <div class="col-md-4">
    </div>
   </div>
</div>
</main>
