<?php
/* @var $this FileAmplopController */
/* @var $model FileAmplop */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload File Amplop';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>