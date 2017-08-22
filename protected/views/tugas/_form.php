<?php
/* @var $this TugasController */
/* @var $model Tugas */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'tugas-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'petugas_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'petugas_id'); ?>
					<?php echo $form->dropDownList($model, "petugas_id",
						CHtml::listData(Petugas::model()->findAll(),
							'id_petugas', 'nama'
							),
						array("empty"=>"-- Pilih Petugas --",'class'=>'form-control')
						); ?>                             
					</div>

				</div>  

				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'deskripsi'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'deskripsi'); ?>
						<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control')); ?>
					</div>

				</div>  

				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'bobot'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'bobot'); ?>
						<?php echo $form->dropDownList($model, "bobot",
							CHtml::listData(Kegiatan::model()->findAll(),
								'bobot', 'nama','bobot'
								),
							array("empty"=>"-- Tugas --",'class'=>'form-control')
							); ?>   
						</div>

					</div>  													

					<div class="form-group">
						<div class="col-md-12">  
						</br></br>
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

</div></div><!-- form -->