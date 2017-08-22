<?php
/* @var $this RakController */
/* @var $model Rak */

$this->breadcrumbs=array(
	'Raks'=>array('index'),
	$model->id_rak,
	);

	$this->pageTitle='Detail Rak';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Rak'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Rak'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Rak'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
	 array('update', 'id'=>$model->id_rak,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Rak'));
 ?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
	 array('delete', 'id'=>$model->id_rak,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Rak'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Rak'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Rak'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Rak'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_rak,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Rak'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_rak,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Rak'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_rak',
		'kode',
		'deskripsi',
		'lemari_id',
		'status',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

