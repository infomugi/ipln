<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	$model->id_pelanggan=>array('view','id'=>$model->id_pelanggan),
	'Update',
	);

	$this->pageTitle='Edit Pelanggan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>