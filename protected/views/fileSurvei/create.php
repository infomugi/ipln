<?php
/* @var $this FileSurveiController */
/* @var $model FileSurvei */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Data Survei';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>