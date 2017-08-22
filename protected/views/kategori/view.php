<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	$model->id_kategori,
	);

$this->menu=array(
	array('label'=>'Daftar Kategori', 'url'=>array('index')),
	array('label'=>'Kelola Kategori', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Kategori';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-warning btn-flat','title'=>'Tambah Kategori'));
	?>
	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-warning btn-flat', 'title'=>'Daftar Kategori'));
		?>
		<?php echo CHtml::link('Kalola',
			array('admin'),
			array('class' => 'btn btn-warning btn-flat','title'=>'Kelola Kategori'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->id_kategori,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Kategori'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->id_kategori,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Kategori'));
							?>

							<HR>

								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										'id_kategori',
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

