<?php
/* @var $this DivisiController */
/* @var $model Divisi */

$this->breadcrumbs=array(
	'Divisis'=>array('index'),
	$model->id_divisi=>array('view','id'=>$model->id_divisi),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Divisi', 'url'=>array('index')),
	array('label'=>'Tambah Divisi', 'url'=>array('create')),
	array('label'=>'Detail Divisi', 'url'=>array('view', 'id'=>$model->id_divisi)),
	array('label'=>'Kelola Divisi', 'url'=>array('admin')),
);	

	$this->pageTitle='Edit Divisi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>