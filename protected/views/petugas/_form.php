<?php
/* @var $this PetugasController */
/* @var $model Petugas */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'petugas-form',
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
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'username'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'password'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jabatan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jabatan'); ?>
					<?php echo $form->dropDownList($model, "jabatan",
						CHtml::listData(Jabatan::model()->findAll(),
							'id_jabatan', 'nama'
							),
						array('class'=>'form-control'),
						array("empty"=>"-- Pilih Jabatan --")
						); ?> 
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'divisi'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'divisi'); ?>
						<?php echo $form->dropDownList($model, "divisi",
							CHtml::listData(Divisi::model()->findAll(),
								'id_divisi', 'nama'
								),
							array('class'=>'form-control'),
							array("empty"=>"-- Pilih Bagian --")
							); ?> 

						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'email'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'email'); ?>
							<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'level'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'level'); ?>
							<?php
							echo $form->dropDownlist($model,'level',
								array(
									''=>'-- Pilih Hak Akses --',
									'1'=>'Superadmin',
									// '2'=>'Pimpinan',
									// '3'=>'Kepala Staff',
									'4'=>'Petugas'
									), 
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
