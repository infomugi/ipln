<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Kategori', 'url'=>array('create')),
	array('label'=>'Daftar Kategori', 'url'=>array('index')),
	array('label'=>'Kelola Kategori', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Kategori';
?>


<?php echo CHtml::link('Tambah Kategori',
	array('create'),
	array('class' => 'btn btn-warning btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Kategori',
		array('index'),
		array('class' => 'btn btn-warning btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'kategori-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'id_kategori',
					'nama',
					array(
						'name'=>'status',
						'value'=>'Petugas::model()->status($data->status)'
						),
					array(
						'header'=>'Action',
						'class'=>'CButtonColumn',
						'htmlOptions'=>array('width'=>'100px', 
							'style' => 'text-align: center;'),
						),
					),
					)); ?>

