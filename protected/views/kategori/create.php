<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Kategori', 'url'=>array('index')),
	array('label'=>'Kelola Kategori', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Kategori';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>