<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

	
		
		<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model, 'firstname', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'firstname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model, 'lastname', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'lastname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idposition'); ?>
		<?php echo $form->dropDownList($model, 'idposition', GxHtml::listDataEx(Position::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idposition'); ?>
		</div><!-- row -->
			<div class="row">
		<?php echo $form->labelEx($model,'group'); ?>
		<?php echo $form->textField($model, 'group'); ?>
		<?php echo $form->error($model,'group'); ?>
		</div><!-- row -->
		<div class="row">
		<?php //echo $form->labelEx($model,'status'); ?>
		<?php echo $form->hiddenField($model, 'status',array("value"=>0)); ?>
		<?php //echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<!--
		<div class="row">
		<?php //echo $form->labelEx($model,'salt'); ?>
		<?php //echo $form->textField($model, 'salt', array('maxlength' => 32)); ?>
		<?php //echo $form->error($model,'salt'); ?>
		</div><!-- row -->


		

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->