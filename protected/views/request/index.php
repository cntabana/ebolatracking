<?php
$this->breadcrumbs=array(
	'Requests',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('request-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h3>Requests</h3>
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
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
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


<?php
//echo 'CHtml::link("Redirect",Yii::app()->createUrl("userRequests/create", array("idrequest"=>$model->status)))';
$link = 'CHtml::link("Redirect",Yii::app()->createUrl("userRequests/create", array("idrequest"=>$data["id"])))';
 $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'request-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'id',
		//'request',
		 array(
                'name'=>'request',
                   'header'=>'Request',
                   'type'=>'raw',
                  // 'value'=>'$data->nameofmd',
				   'value'=>'CHtml::link($data["request"],Yii::app()->createUrl("request/view", array("id"=>$data["id"])))',
                   //'htmlOptions'=>array('width'=>'40'),
                  
           ),
		'phonenumber',
		'email',
		'requestdate',
		'responsedate',
		array(
        'name'=>'status',
        'value'=>'Request::getStatus($data->status)',
        'filter'=>CHtml::listData(Request::getStatuss(), 'id', 'status'),
        ),
		 array(
                'name'=>'idrequest',
                   'header'=>'Redirect',
                   'type'=>'raw',
                  // 'value'=>'$data->nameofmd',
				   'value'=>$link,
                   //'htmlOptions'=>array('width'=>'40'),
                  
           ),
     /* array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view} {update} {delete}',
			'buttons' => array(
			      'view' => array(
					'label'=> 'View',
					'options'=>array(
						'class'=>'btn btn-small view'
					)
				),	
                              'update' => array(
					'label'=> 'Update',
					'options'=>array(
						'class'=>'btn btn-small update'
					)
				),
				'delete' => array(
					'label'=> 'Delete',
					'options'=>array(
						'class'=>'btn btn-small delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 116px'),
           )*/
	),
)); ?>

