<?php
/* @var $this TugasController */
/* @var $model Tugas */

$this->breadcrumbs=array(
	'Tugases'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Tugas', 'url'=>array('create')),
	array('label'=>'Daftar Tugas', 'url'=>array('index')),
	array('label'=>'Kelola Tugas', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Tugas';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Tugas',
		array('create'),
		array('class' => 'btn btn-warning btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Tugas',
			array('index'),
			array('class' => 'btn btn-warning btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'tugas-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'id_tugas',
						'event_id',
						'petugas_id',
						'tanggal_mulai',
						'tanggal_selesai',
						'status',
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>
						
					</section>