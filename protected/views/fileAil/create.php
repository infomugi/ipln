<?php
/* @var $this FileAilController */
/* @var $model FileAil */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload File AIL';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>