<?php
/* @var $this PositionStaffController */

$this->breadcrumbs=array(
	'Position Staff',
);
?>
<hr />
<?php
$this->Widget('ext.highcharts.HighchartsWidget', array(
        'options'=>array(
            'chart'=> array('type'=>'column'),
		    'tooltip'=>array ('valueSuffix'=> ' Status'), 
			'legend'=>array('borderWidth'=> 1),
            'credits'=>array('enabled'=>false),
            'title' => array('text'=>'Requests'),
            'legend'=> array('enabled'=>false),
            'plotOptions'=>array('pie'=>array('dataLabels'=>array('enabled'=>true),'showInLegend'=> true, 'allowPointSelect'=> true,                    'cursor'=> 'pointer')),
            'xAxis' => array('categories'=>$status),
            'yAxis' => array('title'=>array('text'=>'Number')),
            'series' => array(array('name' => 'Counts', 'data' => $num),
        ))
     ));
	 ?>