<?php
/* @var $this FilePerjanjianController */
/* @var $model FilePerjanjian */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat Perjanjian';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>