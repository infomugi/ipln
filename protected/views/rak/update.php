<?php
/* @var $this RakController */
/* @var $model Rak */

$this->breadcrumbs=array(
	'Raks'=>array('index'),
	$model->id_rak=>array('view','id'=>$model->id_rak),
	'Update',
	);

	$this->pageTitle='Edit Rak';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>