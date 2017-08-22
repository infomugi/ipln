<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	$model->id_kategori=>array('view','id'=>$model->id_kategori),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Kategori', 'url'=>array('index')),
	array('label'=>'Tambah Kategori', 'url'=>array('create')),
	array('label'=>'Detail Kategori', 'url'=>array('view', 'id'=>$model->id_kategori)),
	array('label'=>'Kelola Kategori', 'url'=>array('admin')),
);	

	$this->pageTitle='Edit Kategori';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>