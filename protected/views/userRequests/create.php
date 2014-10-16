<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);


?>

<h3><?php echo Yii::t('app', 'Create') . ' ' . GxHtml::encode($model->label()); ?></h3>
<hr>
<div style="margin-left:150px">
<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>
</div>