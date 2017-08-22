<?php
/* @var $this RakController */
/* @var $model Rak */

$this->breadcrumbs=array(
	'Raks'=>array('index'),
	$model->id_rak,
	);

	$this->pageTitle='Detail Rak';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Tambah Rak'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'Daftar Rak'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Kelola Rak'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_rak,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Rak'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id_rak,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Rak'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_rak',
		'kode',
		'deskripsi',
		'ruangan_id',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

