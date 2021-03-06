<?php
/* @var $this LemariController */
/* @var $model Lemari */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'lemari-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kode'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kode'); ?>
					<?php echo $form->textField($model,'kode',array('class'=>'form-control')); ?>
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

			<?php if($model->isNewRecord): ?>
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'baris'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'baris'); ?>
						<?php echo $form->textField($model,'baris',array('class'=>'form-control')); ?>
					</div>
					
				</div>  

				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'kolom'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'kolom'); ?>
						<?php echo $form->textField($model,'kolom',array('class'=>'form-control')); ?>
					</div>
					
				</div>  

				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'maksimal'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'maksimal'); ?>
						<?php echo $form->textField($model,'maksimal',array('class'=>'form-control')); ?>
					</div>
					
				</div>  						

			<?php endif; ?>


			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tipe'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tipe'); ?>
					<?php
					echo $form->dropDownlist($model,'tipe',
						array(''=>'-- Pilih Warna --','1'=>'Hijau','2'=>'Biru','4'=>'Merah'), 
						array('class'=>'form-control')
						);
						?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'status'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'status'); ?>
						<?php
						echo $form->dropDownlist($model,'status',
							array(''=>'-- Pilih Status --','1'=>'Aktif','0'=>'Tidak Aktif'), 
							array('class'=>'form-control')
							);
							?>
						</div>

					</div>  

					<div class="form-group">
						<div class="col-md-12">  
						</br></br>
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

</div></div><!-- form -->