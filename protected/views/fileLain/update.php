<?php
/* @var $this FileLainController */
/* @var $model FileLain */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FileLain';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>