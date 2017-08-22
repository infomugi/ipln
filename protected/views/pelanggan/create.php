<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Pelanggan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>