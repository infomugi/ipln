<?php
/* @var $this FilePelangganController */
/* @var $model FilePelanggan */

$this->breadcrumbs=array(
	'File Amplops'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Surat Identitas Pelanggan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>