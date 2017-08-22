<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Pelanggan';
?>

<?php echo CHtml::link('Tambah Pelanggan',
	array('create'),
	array('class' => 'btn btn-warning pull-right btn-flat'));
	?>

	<HR>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'pelanggan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

				array(
					'header'=>'No',
					'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
					'htmlOptions'=>array('width'=>'10px', 
						'style' => 'text-align: center;')),

				'kode',
				'nama',
				'alamat',
				'tarif',
				'daya',
				'rupiah_uil',

				array(
					'header'=>'Action',
					'class'=>'CButtonColumn',
					'htmlOptions'=>array('width'=>'100px', 
						'style' => 'text-align: center;'),
					),
				),
				)); ?>

