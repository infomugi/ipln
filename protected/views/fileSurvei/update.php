<?php
/* @var $this FileSurveiController */
/* @var $model FileSurvei */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FileSurvei';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>