<?php
/* @var $this JabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Jabatan', 'url'=>array('index')),
	array('label'=>'Kelola Jabatan', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Jabatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>