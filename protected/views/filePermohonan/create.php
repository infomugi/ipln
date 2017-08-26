<?php
/* @var $this FilePermohonanController */
/* @var $model FilePermohonan */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat Permohonan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>