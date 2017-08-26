<?php
/* @var $this FileJawabanController */
/* @var $model FileJawaban */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat Jawaban';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>