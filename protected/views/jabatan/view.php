<?php
/* @var $this JabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	$model->id_jabatan,
	);

$this->menu=array(
	array('label'=>'Daftar Jabatan', 'url'=>array('index')),
	array('label'=>'Kelola Jabatan', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Jabatan';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-warning btn-flat','title'=>'Tambah Jabatan'));
	?>
	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-warning btn-flat', 'title'=>'Daftar Jabatan'));
		?>
		<?php echo CHtml::link('Kalola',
			array('admin'),
			array('class' => 'btn btn-warning btn-flat','title'=>'Kelola Jabatan'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->id_jabatan,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Jabatan'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->id_jabatan,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Jabatan'));
							?>

							<HR>

								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										'id_jabatan',
										'nama',
										array(
											'name'=>'status',
											'value'=>Petugas::model()->status($model->status)
											),
										),
										)); ?>


								<STYLE>
									th{width:150px;}
								</STYLE>

