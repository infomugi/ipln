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
						array(''=>'-- Pilih Tarif --','R1'=>'R1','R1T'=>'R1T'), 
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
							array(
								''=>'-- Pilih Daya --',
								'1'=>'450',
								'2'=>'900',
								'3'=>'1300',
								'4'=>'2200',
								'5'=>'3300',
								'6'=>'3500',
								'7'=>'4400',
								'8'=>'5500',
								'9'=>'6600',
								'10'=>'7700',
								'11'=>'10600',
								'12'=>'13200',
								'13'=>'16500',
								'14'=>'23000',
								'15'=>'33000',
								'16'=>'41500',
								'17'=>'53000',
								'18'=>'66000',
								'19'=>'82500',
								'20'=>'131000',
								'21'=>'164000',
								), 
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