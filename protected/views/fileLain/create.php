<?php
/* @var $this FileLainController */
/* @var $model FileLain */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat Lain-Lain';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>