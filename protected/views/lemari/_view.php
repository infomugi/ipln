<?php
/* @var $this LemariController */
/* @var $data Lemari */
?>


<!-- Default box -->
<div class="box box-solid">
	<div class="box-header">
		<h3 class="box-title">

			<?php echo CHtml::link(CHtml::encode("Kode Lemari - ".$data->kode), array('view', 'id'=>$data->id_lemari)); ?>
			<br />
		</h3>


	</div>
	<div class="box-body">

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$data,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
				'id_lemari',
				'kode',
				'deskripsi',
				'status',
				),
				)); ?>

			</div><!-- /.box-body -->
		</div><!-- /.box -->

