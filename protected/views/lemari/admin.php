<?php
/* @var $this LemariController */
/* @var $model Lemari */

$this->breadcrumbs=array(
	'Lemaris'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Lemari';
?>


<?php echo CHtml::link('Tambah Lemari',
	array('create'),
	array('class' => 'btn btn-warning pull-right btn-flat'));
	?>

	<HR>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'lemari-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

							// array(
							// 	'header'=>'No',
							// 	'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							// 	'htmlOptions'=>array('width'=>'10px', 
							// 		'style' => 'text-align: center;')),

							// 'id_lemari',
				'kode',
				'deskripsi',
							// 'status',
				array(
					'class'=>'CButtonColumn',
					'template'=>'{view}{update}',
					'buttons'=>array(
						'view'=>
						array(
							'url'=>'Yii::app()->createUrl("Lemari/view", array("id"=>$data->id_lemari))',
							'options'=>array(
								'ajax'=>array(
									'type'=>'POST',
									'url'=>"js:$(this).attr('href')",
									'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
									),
								),
							),
						),
					),
				),
				)); ?>



				<!-- Modal -->
				<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<!-- Popup Header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title"><strong>Lihat</strong> Lemari</h4>
							</div>
							<!-- Popup Content -->
							<div class="modal-body">
								<p>Details</p>
							</div>

						</div>
					</div>
				</div>


