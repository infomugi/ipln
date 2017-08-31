<?php
/* @var $this PetugasController */
/* @var $model Petugas */
$this->pageTitle='Kelola Petugas';

$this->menu=array(
	array('label'=>'Tambah Petugas', 'url'=>array('create')),
	array('label'=>'Daftar Petugas', 'url'=>array('index')),
	);
	?>

	<?php echo CHtml::link('Tambah Petugas',
		array('create'),
		array('class' => 'btn btn-warning pull-right btn-flat'));
		?>
		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'petugas-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table table-striped table-hover',
				'columns'=>array(
					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						),

					'nama',
					'email',

					array(
						'name'=>'level',
						'filter'=>array(
							'0'=>'-',
							'1'=>'Superadmin',
							'4'=>'Petugas'
							),
						'value'=>'Petugas::model()->level($data->level)'
						),

					array(
						'class'=>'CButtonColumn',
						),
					),
					)); ?>
