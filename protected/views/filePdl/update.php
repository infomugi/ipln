<?php
/* @var $this FileBapController */
/* @var $model FileBap */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FileBap';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>