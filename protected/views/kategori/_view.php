<?php
/* @var $this KategoriController */
/* @var $data Kategori */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->id_kategori), array('view', 'id'=>$data->id_kategori)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
				<?php echo CHtml::encode($data->nama); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
				<?php echo CHtml::encode($data->status); ?>
				<br />

				

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
