<?php
/* @var $this TugasController */
/* @var $model Tugas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tugas'); ?>
		<?php echo $form->textField($model,'id_tugas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'event_id'); ?>
		<?php echo $form->textField($model,'event_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'petugas_id'); ?>
		<?php echo $form->textField($model,'petugas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_mulai'); ?>
		<?php echo $form->textField($model,'tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_selesai'); ?>
		<?php echo $form->textField($model,'tanggal_selesai'); ?>
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