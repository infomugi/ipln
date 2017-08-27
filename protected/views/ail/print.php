<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	$model->id_ail,
	);

$this->pageTitle='Cetak Kode MAP - '.$model->kode_map;
?>
<div class="row">

	<div class="col-md-6 col-md-offset-3">
		<center>
			<H1>-------------------------<BR>
				KODE MAP <BR> 
				<B><?php echo $model->kode_map; ?></B><BR>
				-------------------------
			</H1>
		</center>
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
				'kode_map',
				'kode_rak',
				'baris_id',
				'kolom_id',
				'nomor_urut',
				'deskripsi',
				),
				)); ?>

			</div>

		</div>

		<STYLE>
			th{width:220px;}
		</STYLE>

