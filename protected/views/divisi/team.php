<?php
/* @var $this DivisiController */
/* @var $model Divisi */
$this->pageTitle='Kelola Team';

$this->menu=array(
	array('label'=>'Tambah Divisi', 'url'=>array('create')),
	array('label'=>'Daftar Divisi', 'url'=>array('index')),
	);
	?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'divisi-grid',
					'dataProvider'=>$dataProvider,
					'itemsCssClass' => 'table table-striped table-hover',
					'columns'=>array(
						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							),
						'id_divisi',
						'nama',
						array(
							'name'=>'status',
							'value'=>'Petugas::model()->status($data->status)'
							),
						array(
							'class'=>'CButtonColumn',
							),
						),
						)); ?>
