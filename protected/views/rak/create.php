<?php
/* @var $this RakController */
/* @var $model Rak */

$this->breadcrumbs=array(
	'Raks'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Rak';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>