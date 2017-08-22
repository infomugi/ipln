<?php
/* @var $this RakController */
/* @var $model Rak */

$this->breadcrumbs=array(
	'Raks'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Rak';
?>


<?php echo CHtml::link('Tambah Rak',
	array('create'),
	array('class' => 'btn btn-primary btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Rak',
		array('index'),
		array('class' => 'btn btn-primary btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'rak-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'id_rak',
					'kode',
					'deskripsi',
					'ruangan_id',
					'status',
					
					array(
						'header'=>'Action',
						'class'=>'CButtonColumn',
						'htmlOptions'=>array('width'=>'100px', 
							'style' => 'text-align: center;'),
						),
					),
					)); ?>

