<?php
/* @var $this JabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	$model->id_jabatan=>array('view','id'=>$model->id_jabatan),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Jabatan', 'url'=>array('index')),
	array('label'=>'Tambah Jabatan', 'url'=>array('create')),
	array('label'=>'Detail Jabatan', 'url'=>array('view', 'id'=>$model->id_jabatan)),
	array('label'=>'Kelola Jabatan', 'url'=>array('admin')),
);	

	$this->pageTitle='Edit Jabatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>