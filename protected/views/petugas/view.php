<?php
/* @var $this PetugasController */
/* @var $model Petugas */
$this->pageTitle='Detail Petugas';

$this->menu=array(
	array('label'=>'Daftar Petugas', 'url'=>array('index')),
	array('label'=>'Kelola Petugas', 'url'=>array('admin')),
	);
	?>
	<?php echo CHtml::link('Tambah',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Petugas'));
		?>
		<?php echo CHtml::link('Daftar',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Petugas'));
			?>
			<?php echo CHtml::link('Kelola',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Petugas'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_petugas,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Petugas'));
						?>
						<?php echo CHtml::link('Password', 
							array('password', 'id'=>$model->id_petugas,
								), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Password'));
								?>						

										<HR>

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table "),
												'attributes'=>array(
													'id_petugas',
													'nama',
													'username',
													'email',

													array(
														'name'=>'jabatan',
														'value'=>$model->Job->nama
														),

													array(
														'name'=>'divisi',
														'value'=>$model->Division->nama
														),

													array(
														'name'=>'level',
														'value'=>Petugas::model()->level($model->level)
														),
													),
													)); ?>

											<STYLE>
												th{width:150px;}
											</STYLE>
