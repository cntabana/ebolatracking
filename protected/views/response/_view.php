<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idrequest')); ?>:</b>
	<?php echo CHtml::encode($data->idrequest); ?>
	<br />

	<b><?php echo CHtml::encode(strip_tags($data->getAttributeLabel('response'))).'coco'; ?>:</b>
	<?php echo CHtml::encode($data->response); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response_date')); ?>:</b>
	<?php echo CHtml::encode($data->response_date); ?>
	<br />


</div>