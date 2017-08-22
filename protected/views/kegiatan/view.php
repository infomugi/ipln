<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatans'=>array('index'),
	$model->id_kegiatan,
	);

	$this->pageTitle='Detail Kegiatan';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Kegiatan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Kegiatan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Kegiatan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
	 array('update', 'id'=>$model->id_kegiatan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Kegiatan'));
 ?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
	 array('delete', 'id'=>$model->id_kegiatan,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kegiatan'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Kegiatan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Kegiatan'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Kegiatan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_kegiatan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Kegiatan'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_kegiatan,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kegiatan'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_kegiatan',
		'nama',
		'bobot',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

