<?php
/* @var $this FileAmplopController */
/* @var $model FileAmplop */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FileAmplop';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>