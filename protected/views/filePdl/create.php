<?php
/* @var $this FileBapController */
/* @var $model FileBap */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat PDL';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>