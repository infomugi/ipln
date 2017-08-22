<?php
/* @var $this SettingController */
/* @var $model Setting */
$this->pageTitle='Tambah Setting';

$this->menu=array(
	array('label'=>'Daftar Setting', 'url'=>array('index')),
	array('label'=>'Kelola Setting', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>