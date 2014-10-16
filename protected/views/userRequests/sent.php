<?php
$this->breadcrumbs=array(
	'User Requests',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('user-requests-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h3>User Requests</h3>
<hr />

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
        array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
		array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
		array('label'=>'Export to Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
	),
));
$this->endWidget();
?>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'user-requests-grid',
	'dataProvider'=>$model->searchSent(),
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'id',
			'receiveddate',
		array(
        'name'=>'status',
        'value'=>'Request::getStatus($data->status)',
        'filter'=>CHtml::listData(Request::getStatuss(), 'id', 'status'),
        ),
		 array(
                'name'=>'idrequest0.request',
                   'header'=>'Request',
                   'type'=>'raw',
                  // 'value'=>'$data->nameofmd',
				   'value'=>'CHtml::link("View Request",Yii::app()->createUrl("userRequests/view", array("id"=>$data["id"])))',
                   //'htmlOptions'=>array('width'=>'40'),
                  
           ),
		 	
      
	),
)); ?>

