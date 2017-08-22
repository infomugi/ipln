<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatans'=>array('index'),
	$model->id_kegiatan=>array('view','id'=>$model->id_kegiatan),
	'Edit',
	);

	$this->pageTitle='Edit Kegiatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>