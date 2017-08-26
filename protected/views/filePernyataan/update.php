<?php
/* @var $this FilePernyataanController */
/* @var $model FilePernyataan */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FilePernyataan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>