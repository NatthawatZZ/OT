<?php include Yii::app()->basePath . '/../themes/demo/include/inc.php'; ?>
<br><br><br><br>
<div class="login-form-bg h-100">
		<div class="container h-100">
				<div class="row justify-content-center h-100">
						<div class="col-xl-6">
								<div class="form-input-content">
										<div class="card login-form mb-0">
												<div class="card-body pt-5">

			<a href="#"><h1 class="text-center">OT Bangkok Web Solutions</h1></a>

			<div class="mt-5 mb-5 login-input">
				<?php
				$form=$this->beginWidget('booster.widgets.TbActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

				<?php echo $form->errorSummary($model); ?>

				<div class="form-group">
					<?php echo $form->textFieldGroup($model,'username',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'form-control input-border-bottom','maxlength'=>20)))); ?>
				</div>

				<div class="form-group">
					<?php echo $form->passwordFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'form-control input-border-bottom	')))); ?>
				</div>

				<div class="form-group">
					<?php echo $form->checkboxGroup($model,'rememberMe'); ?>
				</div>

				<div class="text-center">
					<?php $this->widget('booster.widgets.TbButton', array(
						'buttonType'=>'submit',
						'context'=>'primary',
						 'size' => 'large',
						'label'=>'Sign In',

									)); ?>
								</div>
							<?php $this->endWidget(); ?>
							</div><!-- form -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
