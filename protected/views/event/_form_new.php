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
					<?php echo $form->labelEx($model,'divisi_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'divisi_id'); ?>
					<?php echo $form->dropDownList($model, "divisi_id",
						CHtml::listData(Divisi::model()->findAll(),
							'id_divisi', 'nama'
							),
						array("empty"=>"-- Pilih Divisi --",'class'=>'form-control')
						); ?>                             
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'kategori_id'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'kategori_id'); ?>
						<?php echo $form->dropDownList($model, "kategori_id",
							CHtml::listData(Kategori::model()->findAll(),
								'id_kategori', 'nama'
								),
							array("empty"=>"-- Pilih Kategori --",'class'=>'form-control')
							); ?>   
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'tanggal_mulai'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'tanggal_mulai'); ?>
							<?php
							$this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'options'=>array(
									'showAnim'=>'fold',
									),
								'model'=>$model,
								'attribute'=>'tanggal_mulai',
								'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tanggal_mulai)),
								'htmlOptions'=>array(
									'class'=>'form-control',
									'placeholder'=>'Tanggal Mulai',												
												// 'style'=>'width:100%',
									'tabindex'=>2
									),
								'options'=>array(
									'dateFormat' => 'd-mm-yy',
												'showAnim'=>'drop',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												'onSelect'=>'js:function(selectedDate){
													var option = "minDate",
													instance = $(this).data("datepicker");
													date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
													$("#'.CHtml::activeId($model, 'tanggal_berakhir').'").datepicker("option", option, date);
												}'
												),
								));
								?>							
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'tanggal_berakhir'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'tanggal_berakhir'); ?>
								<?php
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
									'options'=>array(
										'showAnim'=>'drop',
										),
									'model'=>$model,
									'attribute'=>'tanggal_berakhir',
									'htmlOptions'=>array(
										'class'=>'form-control',
										'placeholder'=>'Tanggal Berakhir',
													// 'style'=>'width:100%',
										'tabindex'=>3
										),
									'options'=>array(
										'dateFormat' => 'd-mm-yy',
										'showButtonPanel'=>true,
										'changeMonth'=>true,
										'changeYear'=>true,
										'defaultDate'=>'+1w',
										'onSelect'=>'js:function(selectedDate){
											var option = "maxDate",
											instance = $(this).data("datepicker");
											date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
											$("#'.CHtml::activeId($model, 'tanggal_mulai').'").datepicker("option", option, date);
										}'
										),
									));
									?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'nama_kegiatan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'nama_kegiatan'); ?>
									<?php echo $form->textField($model,'nama_kegiatan',array('class'=>'form-control','placeholder'=>'Nama Kegiatan')); ?>
								</div>

							</div>  

							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'prioritas'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'prioritas'); ?>
									<?php echo $form->dropDownList($model,'prioritas',array(''=>'-- Pilih Prioritas --','Rendah'=>'Rendah','Sedang'=>'Sedang','Tinggi'=>'Tinggi'),array('class'=>'form-control')); ?>
								</div>

							</div>  	

							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'skala'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'skala'); ?>
									<?php echo $form->dropDownList($model,'skala',array(''=>'-- Pilih Skala --','Kecil'=>'Kecil','Menengah'=>'Menengah','Besar'=>'Besar'),array('class'=>'form-control')); ?>
								</div>

							</div>  														

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
									<?php echo $form->labelEx($model,'target'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'target'); ?>
									<?php echo $form->textField($model,'target',array('class'=>'form-control')); ?>
								</div>

							</div>  

							<div class="form-group">
								<div class="col-md-12">  
								</br></br>
								<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
							</div>
						</div>

						<?php $this->endWidget(); ?>

					</div>
</div><!-- form -->