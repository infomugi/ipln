<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	$model->id_ail=>array('view','id'=>$model->id_ail),
	'Update',
	);

	$this->pageTitle='Edit Ail';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>