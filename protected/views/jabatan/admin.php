<?php
/* @var $this JabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Jabatan', 'url'=>array('create')),
	array('label'=>'Daftar Jabatan', 'url'=>array('index')),
	array('label'=>'Kelola Jabatan', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Jabatan';
?>


<?php echo CHtml::link('Tambah Jabatan',
	array('create'),
	array('class' => 'btn btn-warning btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Jabatan',
		array('index'),
		array('class' => 'btn btn-warning btn-flat'));
		?>


		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'jabatan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

				array(
					'header'=>'No',
					'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
					'htmlOptions'=>array('width'=>'10px', 
						'style' => 'text-align: center;')),

				'id_jabatan',
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
				
