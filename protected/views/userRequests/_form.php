<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-requests-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>
   <h2>
      You want to redirect request number <?php  if(isset($_GET['idrequest'])) echo $_GET['idrequest']; ?> to :
   </h2>
	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php 
        $modeldept= Departments::model();
		echo $form->labelEx($modeldept,'deartment'); ?>
		<?php
		
        $department = CHtml::listData(Departments::model()->findAll(array('order'=>'department')), 'id', 'department');
		echo CHtml::activeDropDownList($modeldept, 'id', $department, array('id'=>'id_department','prompt'=>'Choose department')); 
		?>
		<?php echo $form->error($modeldept,'iddepartment'); ?>
		</div><!-- row -->

        <div class="row">
		<?php 
        $modelpos= Position::model();
		echo $form->labelEx($model,'position'); ?>
		<?php 
		$position = CHtml::listData($modelpos->findAll('iddepertment=:iddepertment', array(':iddepertment'=>$modeldept->id)), 'id', 'position'); 
		echo CHtml::activeDropDownList($modelpos, 'id', $position, array('id'=>'id_position','prompt'=>'Choose Position')); 
		ECascadeDropDown::master('id_department')->setDependent('id_position',array('dependentLoadingLabel'=>'Loading Position ...'),'site/citydata'); 
		?>
		<?php echo $form->error($modelpos,'position'); ?>
		</div><!-- row -->

<div class="row">
		<?php 
		 $modeluser= User::model();
       	echo $form->labelEx($model,'iduser'); ?>
		<?php 
		$user = CHtml::listData($modeluser->findAll('idposition=:idposition', array(':idposition'=>$modelpos->id)), 'id', 'firstname'); 
		echo CHtml::activeDropDownList($model, 'iduser', $user, array('id'=>'id_user','prompt'=>'Choose User')); 
		ECascadeDropDown::master('id_position')->setDependent('id_user',array('dependentLoadingLabel'=>'Loading User ...'),'site/citydata2'); 
		?>
		<?php echo $form->error($model,'iduser'); ?>
		</div><!-- row -->





		<div class="row">
		<?php //echo $form->labelEx($model,'idrequest'); ?>
		<?php
		if(isset($_GET['idrequest']))
		    echo $form->hiddenField($model, 'idrequest',array('value'=>$_GET['idrequest'] ));
         else
         	echo $form->hiddenField($model, 'idrequest' );
		 ?>
		<?php //echo $form->dropDownList($model, 'idrequest', GxHtml::listDataEx(Request::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idrequest'); ?>
		</div><!-- row -->

		<div class="row">
		<?php //echo $form->labelEx($model,'iduser'); ?>
		<?php //echo $form->dropDownList($model, 'iduser', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php //echo $form->error($model,'iduser'); ?>
		</div><!-- row -->

		<div class="row">
		<?php //echo $form->labelEx($model,'receiveddate'); ?>
        <?php echo $form->hiddenField($model, 'receiveddate',array('value'=>date('Y-m-d'))) ?>
		<?php //echo $form->error($model,'receiveddate'); ?>
		</div><!-- row -->
		<div class="row">
		<?php //echo $form->labelEx($model,'status'); ?>
		<?php echo $form->hiddenField($model, 'status',array('value'=>1)); ?>
		<?php //echo $form->error($model,'status'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->