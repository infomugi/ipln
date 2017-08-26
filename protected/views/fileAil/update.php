<?php
/* @var $this FileAilController */
/* @var $model FileAil */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FileAil';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>