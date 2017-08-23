<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'pelanggan-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kode'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kode'); ?>
					<?php $this->widget('CMaskedTextField',array('model'=>$model,'attribute'=>'kode','mask'=>'53567-9999999','htmlOptions'=>array('class'=>'form-control')));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'alamat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'alamat'); ?>
					<?php echo $form->textArea($model,'alamat',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tarif'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tarif'); ?>
					<?php
					echo $form->dropDownlist($model,'tarif',
						array(''=>'-- Pilih Tarif --','R1'=>'R1','R2'=>'R2','R3'=>'R3'), 
						array('class'=>'form-control')
						);
						?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'daya'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'daya'); ?>
						<?php
						echo $form->dropDownlist($model,'daya',
							array(''=>'-- Pilih Daya --','1'=>'450','2'=>'900','3'=>'1400','4'=>'2200'), 
							array('class'=>'form-control')
							);
							?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'rupiah_uil'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'rupiah_uil'); ?>
							<?php echo $form->textField($model,'rupiah_uil',array('class'=>'form-control')); ?>
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
								array(''=>'-- Status Pelanggan --','1'=>'Aktif','0'=>'Tidak Aktif'), 
								array('class'=>'form-control')
								);
								?>
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