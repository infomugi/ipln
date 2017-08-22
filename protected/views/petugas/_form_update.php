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
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="span8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
				</div>
			</div>  


			<div class="row-fluid">
				<div class="span4">
					<?php echo $form->labelEx($model,'username'); ?>
				</div>   

				<div class="span8">
					<?php echo $form->error($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('size'=>10,'maxlength'=>10)); ?>
				</div>
			</div>  


			<div class="row-fluid">
				<div class="span4">
					<?php echo $form->labelEx($model,'email'); ?>
				</div>   

				<div class="span8">
					<?php echo $form->error($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
				</div>
			</div>  			


			<div class="row-fluid">
				<div class="span4">
					<?php echo $form->labelEx($model,'jabatan'); ?>
				</div>   

				<div class="span8">
					<?php echo $form->error($model,'jabatan'); ?>
					<?php echo $form->dropDownList($model, "jabatan",
						CHtml::listData(Jabatan::model()->findAll(),
							'id_jabatan', 'nama'
							),
						array("empty"=>"-- Pilih Jabatan --")
						); ?> 
					</div>
				</div>  


				<div class="row-fluid">
					<div class="span4">
						<?php echo $form->labelEx($model,'divisi'); ?>
					</div>   

					<div class="span8">
						<?php echo $form->error($model,'divisi'); ?>
						<?php echo $form->dropDownList($model, "divisi",
							CHtml::listData(Divisi::model()->findAll(),
								'id_divisi', 'nama'
								),
							array("empty"=>"-- Pilih Bagian --")
							); ?> 
						</div>
					</div> 


					<div class="row-fluid">
						<div class="span4">
							<?php echo $form->labelEx($model,'level'); ?>
						</div>   

						<div class="span8">
							<?php echo $form->error($model,'level'); ?>
							<?php
							echo $form->dropDownlist($model,'level',
								array(''=>'-- Pilih Hak Akses --','1'=>'Superadmin','2'=>'Admin','3'=>'Kepala Staff','4'=>'Staff'), 
								array('class'=>'form-control')
								);
								?>
							</div>
						</div>  

						<div class="row-fluid">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-warning pull-right')); ?>
						</div>

						<?php $this->endWidget(); ?>

</div></div><!-- form -->