<?php
/* @var $this FileKuitansiController */
/* @var $model FileKuitansi */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FileKuitansi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>