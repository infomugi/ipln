<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	'Tambah',
	);

$this->pageTitle='Tambah Ail';
?>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,	
	'lemari'=>$lemari,
	'rak'=>$rak,
	'kolom'=>$kolom,
	'baris'=>$baris,
	'rak_id'=>$rak_id
	)); ?>
