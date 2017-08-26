<?php
/* @var $this FileKuitansiController */
/* @var $model FileKuitansi */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat Kuitansi';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>