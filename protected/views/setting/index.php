<?php
/* @var $this SettingController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Daftar Setting';
$this->breadcrumbs=array(
	'Settings',
	);

$this->menu=array(
	array('label'=>'Tambah Setting', 'url'=>array('create')),
	array('label'=>'Kelola Setting', 'url'=>array('admin')),
	);
	?>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'summaryText'=>''
		)); ?>
