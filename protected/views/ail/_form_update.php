<?php
/* @var $this AilController */
/* @var $model Ail */
/* @var $form CActiveForm */
$urut = Yii::app()->db->createCommand("SELECT COUNT(kode_rak) FROM ail where kode_rak='".$model->kode_rak."'")->queryScalar();
$nomorurut = 1 + $urut;
?>

<?php if($urut <= 2){ ?>
	<div class="form-normal form-horizontal clearfix">
		<div class="col-md-11"> 

			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'ail-form',
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
					<?php echo $form->labelEx($model,'pelanggan_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'pelanggan_id'); ?>
					<?php echo $form->dropDownList($model, "pelanggan_id",
						CHtml::listData(Pelanggan::model()->findAll(),
							'id_pelanggan', 'nama'
							),
						array('class'=>'form-control'),
						array("empty"=>"-- Pilih Pelanggan --")
						); ?> 
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'rayon_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'rayon_id'); ?>
					<?php echo $form->textField($model,'rayon_id',array('class'=>'form-control','value'=>'53567','readOnly'=>true)); ?>
				</div>

			</div>  



			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kode_rak'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kode_rak'); ?>
					<?php echo $form->textField($model,'kode_rak',array('class'=>'form-control','value'=>$model->kode_rak,'readOnly'=>true)); ?>
				</div>

			</div>  




			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'lemari_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'lemari_id'); ?>
					<?php echo $form->textField($model,'lemari_id',array('class'=>'form-control','value'=>$model->lemari_id,'readOnly'=>true)); ?>
				</div>

			</div>  


			<div class="form-group" style="display:none;">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'rak_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'rak_id'); ?>
					<?php echo $form->textField($model,'rak_id',array('class'=>'form-control','value'=>$model->rak_id,'readOnly'=>true)); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kolom_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kolom_id'); ?>
					<?php echo $form->textField($model,'kolom_id',array('class'=>'form-control','value'=>$model->kolom_id,'readOnly'=>true)); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'baris_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'baris_id'); ?>
					<?php echo $form->textField($model,'baris_id',array('class'=>'form-control','value'=>$model->baris_id,'readOnly'=>true)); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nomor_urut'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nomor_urut'); ?>
					<?php echo $form->textField($model,'nomor_urut',array('class'=>'form-control','value'=>$urut,'readOnly'=>true)); ?>
				</div>

			</div> 



			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kode_map'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kode_map'); ?>
					<?php echo $form->textField($model,'kode_map',array('class'=>'form-control','value'=>$model->kode_rak.'-'.$urut,'readOnly'=>true)); ?>
				</div>

			</div>  




			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kondisi_amplop'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kondisi_amplop'); ?>
					<?php
					echo $form->radioButtonList($model,'kondisi_amplop',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kondisi_ail'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kondisi_ail'); ?>
					<?php
					echo $form->radioButtonList($model,'kondisi_ail',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_surat_permohonan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_surat_permohonan'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_surat_permohonan',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_identitas_pelanggan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_identitas_pelanggan'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_identitas_pelanggan',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_data_survei'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_data_survei'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_data_survei',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_jawaban'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_jawaban'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_jawaban',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_perjanjian'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_perjanjian'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_perjanjian',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_pernyataan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_pernyataan'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_pernyataan',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_kuitansi'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_kuitansi'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_kuitansi',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_perintah_kerja'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_perintah_kerja'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_perintah_kerja',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_bap'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_bap'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_bap',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_pdl'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_pdl'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_pdl',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'surat_lainlain'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'surat_lainlain'); ?>
					<?php
					echo $form->radioButtonList($model,'surat_lainlain',
						array('1'=>'Ada','0'=>'Tidak Ada'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:15px;
								width: 90px;
								float: left;
								'),
							'style'=>'float:left;',
							));
					?>
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
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-warning btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

	</div>

	<?php }else{ ?>


		<div class="alert alert-danger">Halo <?php echo ucfirst(YII::app()->user->name); ?>, Lemari Dengan Nomor Rak <b><?php echo $model->kode_rak; ?></b> Sudah Penuh (Kapasitas / Kolom, Ada Sebanyak <?php echo $urut; ?> Dokumen Map Disini)</div>

		<?php } ?>
</div><!-- form -->