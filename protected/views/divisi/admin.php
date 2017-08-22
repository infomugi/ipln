<?php
/* @var $this DivisiController */
/* @var $model Divisi */

$this->breadcrumbs=array(
	'Divisis'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Divisi', 'url'=>array('create')),
	array('label'=>'Daftar Divisi', 'url'=>array('index')),
	array('label'=>'Kelola Divisi', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Divisi';
?>


<?php echo CHtml::link('Tambah Divisi',
	array('create'),
	array('class' => 'btn btn-warning btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Divisi',
		array('index'),
		array('class' => 'btn btn-warning btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'divisi-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'id_divisi',
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
					
