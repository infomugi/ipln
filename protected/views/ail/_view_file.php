<?php
/* @var $this FileAilController */
/* @var $data FileAil */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h4 class="box-title">

				<?php echo CHtml::link(CHtml::encode("Download #". $data->file), array('view', 'id'=>$data->id)); ?>
			</h4>
		</div>
		<div class="box-body">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
					'tanggal_buat',
					'tanggal_update',
					'deskripsi',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
