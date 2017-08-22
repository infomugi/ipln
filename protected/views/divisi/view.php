<?php
/* @var $this DivisiController */
/* @var $model Divisi */

$this->breadcrumbs=array(
	'Divisis'=>array('index'),
	$model->id_divisi,
	);

$this->menu=array(
	array('label'=>'Daftar Divisi', 'url'=>array('index')),
	array('label'=>'Kelola Divisi', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Divisi';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-warning btn-flat','title'=>'Tambah Divisi'));
	?>
	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-warning btn-flat', 'title'=>'Daftar Divisi'));
		?>
		<?php echo CHtml::link('Kalola',
			array('admin'),
			array('class' => 'btn btn-warning btn-flat','title'=>'Kelola Divisi'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->id_divisi,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Divisi'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->id_divisi,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Divisi'));
							?>

							<HR>

								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										'id_divisi',
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

