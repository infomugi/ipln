<?php
/* @var $this TugasController */
/* @var $data Tugas */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_tugas), array('view', 'id'=>$data->id_tugas)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('petugas_id')); ?>:</b>
	<?php echo CHtml::encode($data->petugas_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
