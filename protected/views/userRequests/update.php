<?php
$this->breadcrumbs=array(
	'User Requests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h3>Update User Request <?php echo $model->id; ?></h3>
<hr/>

<?php 
$this->beginWidget('zii.widgets.CPortlet', array(
	'htmlOptions'=>array(
		'class'=>''
	)
));
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		//array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)),'active'=>true, 'linkOptions'=>array()),
	),
));
$this->endWidget();
?>
<div style='margin-left:150px'>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
</div>