<?php
/* @var $this PetugasController */
/* @var $model Petugas */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span6" id="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'petugas-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model); ?>


			<div class="row-fluid">
				<div class="span4">
					<?php echo $form->labelEx($model,'password'); ?>
				</div>   

				<div class="span8">
					<?php echo $form->error($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
				</div>
			</div>  

			<div class="row-fluid">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-warning pull-right')); ?>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->