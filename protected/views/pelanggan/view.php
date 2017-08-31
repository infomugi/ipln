<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	$model->id_pelanggan,
	);

$this->pageTitle='Detail Pelanggan';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-warning btn-flat','title'=>'Tambah Pelanggan'));
	?>
	<?php echo CHtml::link('Edit', 
		array('update', 'id'=>$model->id_pelanggan,
			), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Pelanggan'));
			?>
			<?php echo CHtml::link('Hapus', 
				array('delete', 'id'=>$model->id_pelanggan,
					),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Pelanggan'));
					?>

					<HR>

						<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$model,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(
								'kode',
								'nama',
								'alamat',

								array(
									'name'=>'tarif',
									'value'=>Pelanggan::model()->tarif($model->tarif)
									),

								array(
									'name'=>'daya',
									'value'=>Pelanggan::model()->data($model->daya)
									),

								array(
									'name'=>'status',
									'value'=>Petugas::model()->status($model->status)
									),
								),
								)); ?>


						<STYLE>
							th{width:150px;}
						</STYLE>

