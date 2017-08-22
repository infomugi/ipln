<?php
/* @var $this PetugasController */
/* @var $data Petugas */
?>

<div class="view span4">

	<h3><?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->id_petugas)); ?></h3>

	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$data,
		'htmlOptions'=>array("class"=>"table "),
		'attributes'=>array(
			'nama',

			array(
				'name'=>'jabatan',
				'value'=>$data->Job->nama
				),

			array(
				'name'=>'divisi',
				'value'=>$data->Division->nama
				),

			array(
				'name'=>'level',
				'value'=>Petugas::model()->level($data->level)
				),
			),
			)); ?>

		</div>

		<STYLE>
			th{width:50px;}
		</STYLE>
