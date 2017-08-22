<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'event-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-success',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'persentase'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'persentase'); ?>
					<?php echo $form->textField($model,'persentase',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'progress'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'progress'); ?>
					<?php echo $form->textArea($model,'progress',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Lapor', array('class' => 'btn btn-info btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

	</div>
</div><!-- form -->