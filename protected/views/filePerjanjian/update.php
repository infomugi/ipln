<?php
/* @var $this FilePerjanjianController */
/* @var $model FilePerjanjian */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FilePerjanjian';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>