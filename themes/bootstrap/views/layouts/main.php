<?php /* @var $this Controller */
error_reporting(E_ALL);

ini_set('display_errors', 1);

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php

if(!Yii::app()->user->isGuest){
if(yii::app()->user->group == 2){

   $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'User Management', 'url'=>array('/user'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Departments', 'url'=>array('/departments'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Requests', 'url'=>array('/request'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Position', 'url'=>array('/position'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Response', 'url'=>array('/response'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Backup', 'url'=>array('/backup'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); 
}else if(yii::app()->user->group == 1){

   $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/home'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'User Requests', 'url'=>array('/userRequests'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Sent', 'url'=>array('/userRequests/sent'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Response', 'url'=>array('/response'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
));	
}
else{

	   $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/home'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'New Requests', 'url'=>array('/request/newRequest'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Open Requests', 'url'=>array('/request/archive'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Under Process Requests', 'url'=>array('/request/underProcess'), 'visible'=>!Yii::app()->user->isGuest),
                 array('label'=>'Closed Requests', 'url'=>array('/request/closed'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
));
}
}else{

     $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); 
}
?>

<div class="container" id="page">
<br>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
   
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
	</br></br></br>
	
		</div><!-- footer -->

</div><!-- page -->

</body>
</html>
