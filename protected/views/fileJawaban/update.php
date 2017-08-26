<?php
/* @var $this FileJawabanController */
/* @var $model FileJawaban */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FileJawaban';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>