<?php
/* @var $this LemariController */
/* @var $model Lemari */

$this->breadcrumbs=array(
	'Lemaris'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Lemari';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>