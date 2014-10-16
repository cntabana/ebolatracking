<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'position-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'iddepertment'); ?>
		<?php echo $form->dropDownList($model, 'iddepertment', GxHtml::listDataEx(Departments::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'iddepertment'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'jobTitle'); ?>
		<?php echo $form->textField($model, 'jobTitle', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'jobTitle'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('users')); ?></label>
		<?php echo $form->checkBoxList($model, 'users', GxHtml::encodeEx(GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->