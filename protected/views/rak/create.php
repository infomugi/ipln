<?php
/* @var $this RakController */
/* @var $model Rak */

$this->breadcrumbs=array(
	'Raks'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Rak';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>