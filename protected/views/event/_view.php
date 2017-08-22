<?php
/* @var $this EventController */
/* @var $data Event */
?>

<div class="view">

	<H1><?php echo CHtml::link(CHtml::encode($data->nama_kegiatan), array('view', 'id'=>$data->id_event)); ?></H1>
	<br />


	<div class="progress">
		<div class="progress-bar progress-bar-striped active progress-bar-animated progress-bar-success " role="progressbar" role="progressbar" aria-valuenow="<?php echo $data->persentase; ?>" aria-valuemin="0" aria-valuemax="<?php echo $data->target; ?>" style="width:<?php echo $data->persentase; ?>%">
			<span class="sr-only"><?php echo $data->persentase; ?>% Complete</span>
		</div>
		<div class="progress-bar progress-bar-danger progress-bar-animated" role="progressbar" style="width:<?php echo 100-$data->persentase; ?>%">
		</div>
	</div>

	<?php 
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$data,
		'htmlOptions'=>array("class"=>"table "),
		'attributes'=>array(
			'tanggal',
			array(
				'name'=>'divisi_id',
				'value'=>$data->Division->nama
				),
			array(
				'name'=>'kategori_id',
				'value'=>$data->Category->nama
				),
			array(
				'label'=>'Tanggal',
				'value'=>$data->tanggal_mulai . " s/d " . $data->tanggal_berakhir 
				),															
			array(
				'name'=>'petugas_id',
				'value'=>$data->Employee->nama
				),
			),
			)); ?>

		</div>