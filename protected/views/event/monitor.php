<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Kelola Event';

$this->menu=array(
	array('label'=>'Tambah Event', 'url'=>array('create')),
	array('label'=>'Daftar Event', 'url'=>array('index')),
	);
	?>
	<span class="hidden-xs">

		<?php echo CHtml::link('Tambah Event',
			array('new'),
			array('class' => 'btn btn-warning btn-flat'));
			?>
			<?php echo CHtml::link('Daftar Event',
				array('divisi'),
				array('class' => 'btn btn-warning btn-flat'));
				?>

			</span>	

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'event-grid',
					'dataProvider'=>$dataProvider,
					// 'filter'=>$model,
					'itemsCssClass' => 'table table-striped table-hover',
					'columns'=>array(
						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							),
						'nama_kegiatan',
						'persentase',
						'target',

						array(
							'header'=>'Status',
							'value'=>'Event::model()->status($data->persentase,$data->target)'
							),
						/*
						'progress',
						'hasil',
						'deskripsi',
						'petugas_id',
						'status',
						*/
						array(
							'class'=>'CButtonColumn',
							),
						),
						)); ?>
