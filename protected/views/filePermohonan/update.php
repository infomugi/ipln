<?php
/* @var $this FilePermohonanController */
/* @var $model FilePermohonan */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FilePermohonan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>