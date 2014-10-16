<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'response-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idrequest'); ?>
		<?php echo $form->hiddenField($model, 'idrequest',array('value'=>$_GET['idrequest'])); ?>
		<?php echo $form->textArea($model, '', array('value'=>Request::model()->find('id='.$_GET['idrequest']),'disabled'=>'true','filter' => 'strip_tags')); ?>
		<?php echo $form->error($model,'idrequest'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'response'); ?><br />
		<?php $this->widget('application.extensions.tinymce.ETinyMce',
		array(
		'model'=>$model,
		'attribute'=>'response',
		'editorTemplate'=>'full',
		'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),
		'options' => array(
		'theme_advanced_buttons1' =>
		'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,formatselect,fontselect,fontsizeselect,|,cut,copy,paste,pastetext,pasteword,|,search,replace,',
		'theme_advanced_buttons2' => 'tablecontrols,|,removeformat,visualaid,',
		'theme_advanced_buttons3' => '',
		'theme_advanced_buttons4' => '',
		'theme_advanced_toolbar_location' => 'top',
		'theme_advanced_toolbar_align' => 'left',
		'theme_advanced_statusbar_location' => 'none',
		'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
		15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
		)
		)); ?>
		<?php echo $form->error($model,'response'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php //echo $form->labelEx($model,'response_date'); ?>
		<?php echo $form->hiddenField($model, 'response_date',array('value'=>date('Y-m-d'))); ?>
		<?php //echo $form->error($model,'response_date'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->