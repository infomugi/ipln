<?php
/* @var $this AilController */
/* @var $model Ail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ail'); ?>
		<?php echo $form->textField($model,'id_ail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_buat'); ?>
		<?php echo $form->textField($model,'tanggal_buat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_update'); ?>
		<?php echo $form->textField($model,'tanggal_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'petugas_id'); ?>
		<?php echo $form->textField($model,'petugas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_id'); ?>
		<?php echo $form->textField($model,'pelanggan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_rak'); ?>
		<?php echo $form->textField($model,'kode_rak',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rayon_id'); ?>
		<?php echo $form->textField($model,'rayon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lemari_id'); ?>
		<?php echo $form->textField($model,'lemari_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rak_id'); ?>
		<?php echo $form->textField($model,'rak_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi_amplop'); ?>
		<?php echo $form->textField($model,'kondisi_amplop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi_ail'); ?>
		<?php echo $form->textField($model,'kondisi_ail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_surat_permohonan'); ?>
		<?php echo $form->textField($model,'surat_surat_permohonan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_identitas_pelanggan'); ?>
		<?php echo $form->textField($model,'surat_identitas_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_data_survei'); ?>
		<?php echo $form->textField($model,'surat_data_survei'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_jawaban'); ?>
		<?php echo $form->textField($model,'surat_jawaban'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_perjanjian'); ?>
		<?php echo $form->textField($model,'surat_perjanjian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_pernyataan'); ?>
		<?php echo $form->textField($model,'surat_pernyataan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_kuitansi'); ?>
		<?php echo $form->textField($model,'surat_kuitansi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_perintah_kerja'); ?>
		<?php echo $form->textField($model,'surat_perintah_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_bap'); ?>
		<?php echo $form->textField($model,'surat_bap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_pdl'); ?>
		<?php echo $form->textField($model,'surat_pdl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surat_lainlain'); ?>
		<?php echo $form->textField($model,'surat_lainlain'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->