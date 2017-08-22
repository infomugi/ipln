<?php
/* @var $this TugasController */
/* @var $model Tugas */

$this->breadcrumbs=array(
	'Tugases'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Tugas', 'url'=>array('index')),
	array('label'=>'Kelola Tugas', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Tugas';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>