<?php
/* @var $this LemariController */
/* @var $model Lemari */

$this->breadcrumbs=array(
	'Lemaris'=>array('index'),
	$model->id_lemari=>array('view','id'=>$model->id_lemari),
	'Edit',
	);

	$this->pageTitle='Edit Lemari';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>