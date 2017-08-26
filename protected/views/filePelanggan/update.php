<?php
/* @var $this FilePelangganController */
/* @var $model FilePelanggan */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit FilePelanggan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>