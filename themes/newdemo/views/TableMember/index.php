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
                	<!-- <div class="limiter">
                    <div class="intro route bg-image" style="background-image: url(<?php echo Yii::app()->theme->baseUrl.'/assets/img/intro-bg.jpg'?>)">
                      <div class="container-login100">
                      <div class="overlay-itro"></div>
                      <div class="wrap-login100 p-l-80 p-r-80 p-t-20 p-b-20">
                				<form method="post" class="login100-form validate-form flex-sb flex-w" >
                					<span class="login100-form-title p-b-53">
                						ลงทะเบียน
                					</span>
                            <div class="form-row">
                            <div class="col-12">
                          <div class="p-t-0 p-b-9">
                            <span class="txt1">
                              รหัสพนักงาน
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="psn_id" placeholder="รหัสพนักงาน">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                          <div class="col-4">
                					<div class="p-t-5 p-b-9 ">
                            <span class="txt1">
                              คำนำหน้า
                            </span>
                            <div class="wrap-input100 validate-input" data-validate = "Username is required">
                              <select name="mb_title" class="input100" >
                                <option  disabled selected >Prefix / คำนำหน้า</option>
                                  <option value="นาย">นาย</option>
                                </select>
                              <span class="focus-input100"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-8">
                        <div class="p-t-5 p-b-9 ">
                          <span class="txt1">
                            ชื่อ-นามสกุล
                          </span>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="mb_name" placeholder="ชื่อ-นามสกุล">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                      </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                              เลขบัตรประจำตัวประชาชน
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="mb_idcard" placeholder="เลขบัตรประจำตัวประชาชน" min="13">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                              หมายเลขโทรศัพท์
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="tel" name="mb_mobile" placeholder="เบอร์โทร" min="9" max="10">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                              Email
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Email is required">
                            <input class="input100" type="email" name="mb_email" placeholder="Email">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                            ตำแหน่ง
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Department is required">
                            <select name="pst_id" class="input100" >
                              <option  disabled selected >Department / ตำแหน่ง</option>
                                <option value="01">Programmer</option>
                                <option value="2">Web Developer</option>
                              </select>
                            <span class="focus-input100"></span>
                          </div>
                          <input type="hidden" name="active" value="y">
                        </div>
                              </div>
                					<div class="container-login100-form-btn m-t-17">
                						<button class="login100-form-btn" type="submit">
                						ลงทะเบียน
                						</button>
                					</div>
                					<div class="w-full text-center p-t-55">
                						<a href="index.php?r=site/login" class="txt2 bo1">
                							เข้าสู่ระบบ
                						</a>
                					</div>
                				</form>
                			</div>
                		</div>
                  </div>
                	</div> -->
                	 <!-- <div id="dropDownSelect1"></div> -->

                   <div class="container-login100">
                    <div class="wrap-login100 p-l-80 p-r-80 p-t-20 p-b-20">

                   <div class="form">
                   <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
                   	'id'=>'table-member-form',
                     'htmlOptions' => array('class' => 'login100-form validate-form flex-sb flex-w'),
                   	// Please note: When you enable ajax validation, make sure the corresponding
                   	// controller action is handling ajax validation correctly.
                   	// There is a call to performAjaxValidation() commented in generated controller code.
                   	// See class documentation of CActiveForm for details on this.
                   	'enableAjaxValidation'=>false,
                   )); ?>
                  <?php echo $form->errorSummary($model); ?>

                	<?php echo $form->labelEx($model,'ลงทะเบียน',array('class'=>'login100-form-title p-b-20')); ?>
             			<div class="row">
             				<?php echo $form->labelEx($model,'psn_id',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'psn_id',array('class'=>'input100','placeholder'=>'รหัสพนักงาน')); ?>
             				<?php echo $form->error($model,'psn_id'); ?>
             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_title',array('class'=>'txt1')); ?>
             				<?php //echo $form->textField($model,'mb_title',array('class'=>'input100','placeholder'=>'คำนำหน้า')); ?>
                    <?php echo ZHtml::enumDropDownList($model,'mb_title',array('class'=>'input100')); ?>
                    <?php echo $form->error($model,'mb_title'); ?>
             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_name',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_name',array('class'=>'input100','placeholder'=>'ชื่อ - นามสกุล')); ?>
             				<?php echo $form->error($model,'mb_name'); ?>
             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_idcard',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_idcard',array('class'=>'input100','placeholder'=>'หมายเลขบัตรประชาชน')); ?>
             				<?php echo $form->error($model,'mb_idcard'); ?>
             			</div>

             			<div class="row">
             				<?php echo $form->labelEx($model,'mb_mobile',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_mobile',array('class'=>'input100','placeholder'=>'หมายเลขโทรศัพท์มือถือ')); ?>
             				<?php echo $form->error($model,'mb_mobile'); ?>
             			</div>

                  <div class="row">
             				<?php echo $form->labelEx($model,'mb_email',array('class'=>'txt1')); ?>
             				<?php echo $form->textField($model,'mb_email',array('class'=>'input100','placeholder'=>'อีเมลล์')); ?>
             				<?php echo $form->error($model,'mb_email'); ?>
             			</div>

                    <div class="row">
             				<?php echo $form->labelEx($model,'pst_id',array('class'=>'txt1')); ?>
             				<?php //echo $form->textField($model,'pst_id',array('class'=>'input100','placeholder'=>'ตำแหน่ง')); ?>
                    <?php echo $form->dropDownList($model,'pst_id',CHtml::listData($position,'pst_id','pst_name')
                    ,array('class'=>'input100'),
                            array('promt'=>'ตำแหน่ง','pst_id'=>'position')
                          ); ?>
             				<?php echo $form->error($model,'pst_id'); ?>
             			</div>


             				<?php //echo $form->labelEx($model,'created_date',array('class'=>'txt1')); ?>
             				<?php echo $form->hiddenField($model,'created_date',array('class'=>'input100')); ?>
             				<?php echo $form->error($model,'created_date'); ?>



             				<?php //echo $form->labelEx($model,'created_by',array('class'=>'txt1')); ?>
             				<?php echo $form->hiddenField($model,'created_by',array('class'=>'input100')); ?>
             				<?php echo $form->error($model,'created_by'); ?>



             				<?php //echo $form->labelEx($model,'update_date',array('class'=>'txt1')); ?>
             				<?php echo $form->hiddenField($model,'update_date',array('class'=>'input100')); ?>
             				<?php echo $form->error($model,'update_date'); ?>



             				<?php //echo $form->labelEx($model,'update_by',array('class'=>'txt1')); ?>
             				<?php echo $form->hiddenField($model,'update_by',array('class'=>'input100')); ?>
             				<?php echo $form->error($model,'update_by'); ?>

             				<?php //echo $form->labelEx($model,'active',array('class'=>'txt1')); ?>
             				<?php echo $form->hiddenField($model,'active',array('class'=>'input100','value'=>'y')); ?>
             				<?php echo $form->error($model,'active'); ?>
                    <br><br><br><br>
             			<div class="row buttons">
             				<?php echo CHtml::submitButton($model->isNewRecord ? 'ลงทะบียน' : 'Save',array('class'=>'login100-form-btn')); ?>
             			</div>

             		<?php $this->endWidget(); ?>
                    </div>
                   </div>
             		</div><!-- form -->
                </main>
