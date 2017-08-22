<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_event'); ?>
		<?php echo $form->textField($model,'id_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'divisi_id'); ?>
		<?php echo $form->textField($model,'divisi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_id'); ?>
		<?php echo $form->textField($model,'kategori_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_mulai'); ?>
		<?php echo $form->textField($model,'tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_berakhir'); ?>
		<?php echo $form->textField($model,'tanggal_berakhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kegiatan'); ?>
		<?php echo $form->textField($model,'nama_kegiatan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'progress'); ?>
		<?php echo $form->textArea($model,'progress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil'); ?>
		<?php echo $form->textArea($model,'hasil',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'petugas_id'); ?>
		<?php echo $form->textField($model,'petugas_id'); ?>
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