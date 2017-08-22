<?php
/* @var $this TugasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tugases',
	);

$this->pageTitle='Daftar Tugas';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('All Tugas',
		array('my'),
		array('class' => 'btn btn-warning btn-flat'));
		?>

	<?php echo CHtml::link('Belum di Kerjakan',
		array('mystart'),
		array('class' => 'btn btn-warning btn-flat'));
		?>		

	<?php echo CHtml::link('Selesai di Kerjakan',
		array('myend'),
		array('class' => 'btn btn-warning btn-flat'));
		?>				

		<HR>

			<?php 
			$this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'tugas-grid',
				'dataProvider'=>$dataProvider,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'class' => 'CButtonColumn',
						'template' => '{view}',
						'class'=>'CButtonColumn',
						'htmlOptions'=>array('width'=>'50px', 
							'style' => 'text-align: center;'),
						'viewButtonUrl' => 'Yii::app()->controller->createUrl("tugas/view",array("id"=>$data->id_tugas))',
						),

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					array(
						'name'=>'tanggal_mulai',
						'value'=>'Tugas::model()->date($data->tanggal_mulai)'
						),	

					array(
						'name'=>'tanggal_selesai',
						'value'=>'Tugas::model()->date($data->tanggal_selesai)'
						),
					'deskripsi',
																					// array(
																					// 	'name'=>'petugas_id',
																					// 	'value'=>'$data->Employee->nama'
																					// 	),			

					array(
						'name'=>'status',
						'value'=>'Tugas::model()->status($data->status)'),

					'bobot',




					),
					)); ?> 

				</section>