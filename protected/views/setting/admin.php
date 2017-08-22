<?php
/* @var $this SettingController */
/* @var $model Setting */
$this->pageTitle='Kelola Setting';

$this->menu=array(
	array('label'=>'Tambah Setting', 'url'=>array('create')),
	array('label'=>'Daftar Setting', 'url'=>array('index')),
);
?>
	<span class="hidden-xs">

		<?php echo CHtml::link('Tambah Setting',
 array('create'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>
		<?php echo CHtml::link('Daftar Setting',
 array('index'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>

	</span>	

	<HR>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'setting-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-striped table-hover',
	'columns'=>array(
	array(
		'header'=>'No',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
		),
		'id_setting',
		'nama',
		'deskripsi',
		'visi',
		'misi',
		'alamat',
		/*
		'website',
		'theme',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
