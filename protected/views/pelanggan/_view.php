<?php
/* @var $this PelangganController */
/* @var $data Pelanggan */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_pelanggan), array('view', 'id'=>$data->id_pelanggan)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::encode($data->kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif')); ?>:</b>
	<?php echo CHtml::encode($data->tarif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('daya')); ?>:</b>
	<?php echo CHtml::encode($data->daya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rupiah_uil')); ?>:</b>
	<?php echo CHtml::encode($data->rupiah_uil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>
        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
