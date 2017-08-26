<?php
/* @var $this FilePernyataanController */
/* @var $model FilePernyataan */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat Pernyataan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>