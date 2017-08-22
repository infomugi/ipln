<?php
/* @var $this SettingController */
/* @var $model Setting */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
        <div class="span6" id="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'setting-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>


		<div class="row-fluid">
			<div class="span4">
				<?php echo $form->labelEx($model,'nama'); ?>
			</div>   

			<div class="span8">
				<?php echo $form->error($model,'nama'); ?>
				<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
			</div>
		</div>  


		<div class="row-fluid">
			<div class="span4">
				<?php echo $form->labelEx($model,'deskripsi'); ?>
			</div>   

			<div class="span8">
				<?php echo $form->error($model,'deskripsi'); ?>
				<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
			</div>
		</div>  


		<div class="row-fluid">
			<div class="span4">
				<?php echo $form->labelEx($model,'visi'); ?>
			</div>   

			<div class="span8">
				<?php echo $form->error($model,'visi'); ?>
				<?php echo $form->textArea($model,'visi',array('rows'=>6, 'cols'=>50)); ?>
			</div>
		</div>  


		<div class="row-fluid">
			<div class="span4">
				<?php echo $form->labelEx($model,'misi'); ?>
			</div>   

			<div class="span8">
				<?php echo $form->error($model,'misi'); ?>
				<?php echo $form->textArea($model,'misi',array('rows'=>6, 'cols'=>50)); ?>
			</div>
		</div>  


		<div class="row-fluid">
			<div class="span4">
				<?php echo $form->labelEx($model,'alamat'); ?>
			</div>   

			<div class="span8">
				<?php echo $form->error($model,'alamat'); ?>
				<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
			</div>
		</div>  


		<div class="row-fluid">
			<div class="span4">
				<?php echo $form->labelEx($model,'website'); ?>
			</div>   

			<div class="span8">
				<?php echo $form->error($model,'website'); ?>
				<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>100)); ?>
			</div>
		</div>  


		<div class="row-fluid">
			<div class="span4">
				<?php echo $form->labelEx($model,'theme'); ?>
			</div>   

			<div class="span8">
				<?php echo $form->error($model,'theme'); ?>
				<?php echo $form->textField($model,'theme',array('size'=>15,'maxlength'=>15)); ?>
			</div>
		</div>  

		<div class="row-fluid">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-warning pull-right')); ?>
		</div>

<?php $this->endWidget(); ?>

</div></div><!-- form -->