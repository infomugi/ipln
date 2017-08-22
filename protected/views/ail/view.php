<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	$model->id_ail,
	);

$this->pageTitle='Detail Ail';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-success btn-flat','title'=>'Tambah Ail'));
	?>
	<?php echo CHtml::link('Edit', 
		array('update', 'id'=>$model->id_ail,
			), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Ail'));
			?>
			<?php echo CHtml::link('Hapus', 
				array('delete', 'id'=>$model->id_ail,
					),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Ail'));
					?>

					<HR>

						<div class="row">
							<div class="col-md-6">

								<h3><i class="fa fa-user"></i> Data Pelanggan</h3>
								
								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										array('label'=>'Nama','value'=>$model->Pelanggan->nama),
										array('label'=>'Alamat','value'=>$model->Pelanggan->alamat),
										array('label'=>'Tarif','value'=>$model->Pelanggan->tarif),
										array('label'=>'Daya','value'=>$model->Pelanggan->daya),
										array('label'=>'Rupiah UIL','value'=>$model->Pelanggan->rupiah_uil),
										),
										)); ?>


										<h3><i class="fa fa-flash"></i> Arsip Induk Langganan</h3>

										<?php $this->widget('zii.widgets.CDetailView', array(
											'data'=>$model,
											'htmlOptions'=>array("class"=>"table"),
											'attributes'=>array(
												'tanggal_buat',
												'tanggal_update',
												'petugas_id',
												'kode_rak',
												'rayon_id',
												'lemari_id',
												'rak_id',
												'deskripsi',
												),
												)); ?>

											</div>

											<div class="col-md-6">
												<h3><i class="fa fa-file-text"></i> Rekaman Arsip Induk</h3>

												<?php $this->widget('zii.widgets.CDetailView', array(
													'data'=>$model,
													'htmlOptions'=>array("class"=>"table"),
													'attributes'=>array(

														'kondisi_amplop',
														'kondisi_ail',
														'surat_surat_permohonan',
														'surat_identitas_pelanggan',
														'surat_data_survei',
														'surat_jawaban',
														'surat_perjanjian',
														'surat_pernyataan',
														'surat_kuitansi',
														'surat_perintah_kerja',
														'surat_bap',
														'surat_pdl',
														'surat_lainlain',

														),
														)); ?>

													</div>
												</div>

												<STYLE>
													th{width:250px;}
												</STYLE>

