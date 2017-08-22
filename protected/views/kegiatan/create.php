<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatans'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Kegiatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>