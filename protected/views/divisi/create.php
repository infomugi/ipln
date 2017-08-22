<?php
/* @var $this DivisiController */
/* @var $model Divisi */

$this->breadcrumbs=array(
	'Divisis'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Divisi', 'url'=>array('index')),
	array('label'=>'Kelola Divisi', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Divisi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>