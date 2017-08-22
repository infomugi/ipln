<?php
/* @var $this TugasController */
/* @var $model Tugas */

$this->breadcrumbs=array(
	'Tugases'=>array('index'),
	$model->id_tugas=>array('view','id'=>$model->id_tugas),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Tugas', 'url'=>array('index')),
	array('label'=>'Tambah Tugas', 'url'=>array('create')),
	array('label'=>'Detail Tugas', 'url'=>array('view', 'id'=>$model->id_tugas)),
	array('label'=>'Kelola Tugas', 'url'=>array('admin')),
);	

	$this->pageTitle='Edit Tugas';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>