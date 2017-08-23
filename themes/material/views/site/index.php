<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Registrasi AIL';
$this->breadcrumbs=array(
	'Home',
	);
	?>

<!-- 	<div class="row">
		<div class="col-sm-6 col-lg-3">
			<div class="widget-simple-chart text-right card-box">
				<div class="circliful-chart circliful" data-dimension="90" data-text="35%" data-width="5" data-fontsize="14" data-percent="35" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;">35%</span><canvas width="90" height="90"></canvas></div>
				<h3 class="text-success counter">586</h3>
				<p class="text-muted">Total Sales today</p>
			</div>
		</div>

		<div class="col-sm-6 col-lg-3">
			<div class="widget-simple-chart text-right card-box">
				<div class="circliful-chart circliful" data-dimension="90" data-text="85%" data-width="5" data-fontsize="14" data-percent="85" data-fgcolor="#3bafda" data-bgcolor="#ebeff2" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;">85%</span><canvas width="90" height="90"></canvas></div>
				<h3 class="text-primary counter">8956</h3>
				<p class="text-muted">Daily visitors</p>
			</div>
		</div>

		<div class="col-sm-6 col-lg-3">
			<div class="widget-simple-chart text-right card-box">
				<div class="circliful-chart circliful" data-dimension="90" data-text="58%" data-width="5" data-fontsize="14" data-percent="58" data-fgcolor="#f76397" data-bgcolor="#ebeff2" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;">58%</span><canvas width="90" height="90"></canvas></div>
				<h3 class="text-pink">$ <span class="counter">22541</span></h3>
				<p class="text-muted">Total Earning</p>
			</div>
		</div>

		<div class="col-sm-6 col-lg-3">
			<div class="widget-simple-chart text-right card-box">
				<div class="circliful-chart circliful" data-dimension="90" data-text="49%" data-width="5" data-fontsize="14" data-percent="49" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;">49%</span><canvas width="90" height="90"></canvas></div>
				<h3 class="text-inverse counter">41</h3>
				<p class="text-muted">Pending Orders</p>
			</div>
		</div>
	</div>
-->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lemari-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
	'columns'=>array(


		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'header'=>'Pengarsipan',
			'buttons'=>array(
				'view'=>
				array(
					'url'=>'Yii::app()->createUrl("Lemari/detail", array("id"=>$data->id_lemari))',
					'imageUrl'=>'images/add.png',
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

		'kode',
		'deskripsi',

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


