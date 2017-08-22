<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Buat Event';

$this->menu=array(
	array('label'=>'Daftar Event', 'url'=>array('index')),
	array('label'=>'Kelola Event', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form_new', array('model'=>$model)); ?>