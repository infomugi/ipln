<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kegiatan'); ?>
		<?php echo $form->textField($model,'id_kegiatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bobot'); ?>
		<?php echo $form->textField($model,'bobot'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->