<?php  $nav1=$nav2=$nav3=''; ?>

<?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-header.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc-css.php'; ?>



    <style >
      ::placeholder{
        opacity: 50%;
       }
    </style>
                <main id="content" >
                   <div class="container-login100">
                    <div class="wrap-login100 p-l-80 p-r-80 p-t-20 p-b-20">
                   <div class="form">
                   <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
                   	'id'=>'table-member-form',
                     'htmlOptions' => array('class' => 'login100-form validate-form flex-sb flex-w'),
                   	'enableAjaxValidation'=>false,
                   )); ?>
                  <?php echo $form->errorSummary($model); ?>

                	<?php echo $form->labelEx($model,'ลงทะเบียน',array('class'=>'login100-form-title p-b-20')); ?>
             			<div class="row">
             				<?php echo $form->labelEx($model,'psn_id',array('class'=>'txt1')); ?>
             				<?php //echo $form->textField($model,'psn_id',array('class'=>'input100','placeholder'=>'รหัสพนักงาน')); ?>
                    <?php echo $form->dropDownList($model,'psn_id',CHtml::listData($employ,'psn_id','psn_per_id')
                    ,array('class'=>'input100'),
                            array('promt'=>'รหัสพนักงาน','psn_id'=>'employ')
                          ); ?>

             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_title',array('class'=>'txt1')); ?>
             				<?php //echo $form->textField($model,'mb_title',array('class'=>'input100','placeholder'=>'คำนำหน้า')); ?>
                    <?php echo ZHtml::enumDropDownList($model,'mb_title',array('class'=>'input100')); ?>

             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_name',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_name',array('class'=>'input100','placeholder'=>'ชื่อ - นามสกุล')); ?>

             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_idcard',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_idcard',array('class'=>'input100','placeholder'=>'หมายเลขบัตรประชาชน','maxlength'=>13)); ?>

             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_mobile',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_mobile',array('class'=>'input100','placeholder'=>'หมายเลขโทรศัพท์มือถือ','maxlength'=>10)); ?>

             			</div>

                  <div class="row">
             				<?php echo $form->labelEx($model,'mb_email',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_email',array('class'=>'input100','placeholder'=>'อีเมลล์')); ?>

             			</div>

                    <div class="row">
             				<?php echo $form->labelEx($model,'pst_id',array('class'=>'txt1')); ?>
             				<?php //echo $form->textField($model,'pst_id',array('class'=>'input100','placeholder'=>'ตำแหน่ง')); ?>
                    <?php echo $form->dropDownList($model,'pst_id',CHtml::listData($position,'pst_id','pst_name')
                    ,array('class'=>'input100'),
                            array('promt'=>'ตำแหน่ง','pst_id'=>'position')
                          ); ?>

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


             			<div class="row ">
                    <div class="container-login100-form-btn m-t-20">
             				<?php echo CHtml::submitButton($model->isNewRecord ? 'ลงทะบียน' : 'Save',array('class'=>'login100-form-btn')); ?>
                    </div>
                	</div>

             		<?php $this->endWidget(); ?>
                    </div>
                   </div>
             		</div><!-- form -->
                </main>
