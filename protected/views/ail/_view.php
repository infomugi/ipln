<?php
/* @var $this AilController */
/* @var $data Ail */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_ail), array('view', 'id'=>$data->id_ail)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_buat')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_buat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_update')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('petugas_id')); ?>:</b>
	<?php echo CHtml::encode($data->petugas_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_id')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_rak')); ?>:</b>
	<?php echo CHtml::encode($data->kode_rak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rayon_id')); ?>:</b>
	<?php echo CHtml::encode($data->rayon_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lemari_id')); ?>:</b>
	<?php echo CHtml::encode($data->lemari_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rak_id')); ?>:</b>
	<?php echo CHtml::encode($data->rak_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi_amplop')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi_amplop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi_ail')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi_ail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_surat_permohonan')); ?>:</b>
	<?php echo CHtml::encode($data->surat_surat_permohonan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_identitas_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->surat_identitas_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_data_survei')); ?>:</b>
	<?php echo CHtml::encode($data->surat_data_survei); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_jawaban')); ?>:</b>
	<?php echo CHtml::encode($data->surat_jawaban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_perjanjian')); ?>:</b>
	<?php echo CHtml::encode($data->surat_perjanjian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_pernyataan')); ?>:</b>
	<?php echo CHtml::encode($data->surat_pernyataan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_kuitansi')); ?>:</b>
	<?php echo CHtml::encode($data->surat_kuitansi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_perintah_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->surat_perintah_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_bap')); ?>:</b>
	<?php echo CHtml::encode($data->surat_bap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_pdl')); ?>:</b>
	<?php echo CHtml::encode($data->surat_pdl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_lainlain')); ?>:</b>
	<?php echo CHtml::encode($data->surat_lainlain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>
        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
