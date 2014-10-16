<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('jobTitle')); ?>:</b>
	<?php echo CHtml::encode($data->jobTitle); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('iddepertment')); ?>:</b>
	<?php echo CHtml::encode($data->iddepertment0->department); ?>
	<br />

</div>