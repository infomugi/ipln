<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	$model->id_ail,
	);

$this->pageTitle='Detail Ail - Kode MAP - '.$model->kode_map;
?>



<?php echo CHtml::link('Print Kode MAP', 
	array('print', 'id'=>$model->id_ail,
		), array('class' => 'btn btn-success btn-flat', 'title'=>'Print'));
		?>
		<?php echo CHtml::link('Edit AIL', 
			array('update', 'id'=>$model->id_ail,
				), array('class' => 'btn btn-success pull-right btn-flat', 'title'=>'Edit Ail'));
				?>


				<HR>

					<div class="row">
						<div class="col-md-6">

							<h3><i class="fa fa-user"></i> Pelanggan: <?php echo $model->kode_map; ?></h3>

							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'rayon_id',
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
											'kode_map',
											'kode_rak',
											'baris_id',
											'kolom_id',
											'nomor_urut',
											'deskripsi',
											),
											)); ?>

										</div>

										<div class="col-md-6">

											<h3><i class="fa fa-github-alt"></i> Petugas Verifikasi</h3>

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
													'tanggal_buat',
													'tanggal_update',
													array('name'=>'petugas_id','value'=>$model->Petugas->nama),
													),
													)); ?>


													<h3><i class="fa fa-file-text"></i> Rekaman Arsip Induk</h3>

													<?php $this->widget('zii.widgets.CDetailView', array(
														'data'=>$model,
														'htmlOptions'=>array("class"=>"table"),
														'attributes'=>array(
															array('name'=>'kondisi_amplop','value'=>Ail::model()->status($model->kondisi_amplop)),
															array('name'=>'kondisi_ail','value'=>Ail::model()->status($model->kondisi_ail)),
															array('name'=>'surat_surat_permohonan','value'=>Ail::model()->status($model->surat_surat_permohonan)),
															array('name'=>'surat_identitas_pelanggan','value'=>Ail::model()->status($model->surat_identitas_pelanggan)),
															array('name'=>'surat_data_survei','value'=>Ail::model()->status($model->surat_data_survei)),
															array('name'=>'surat_jawaban','value'=>Ail::model()->status($model->surat_jawaban)),
															array('name'=>'surat_perjanjian','value'=>Ail::model()->status($model->surat_perjanjian)),
															array('name'=>'surat_pernyataan','value'=>Ail::model()->status($model->surat_pernyataan)),
															array('name'=>'surat_kuitansi','value'=>Ail::model()->status($model->surat_kuitansi)),
															array('name'=>'surat_perintah_kerja','value'=>Ail::model()->status($model->surat_perintah_kerja)),
															array('name'=>'surat_bap','value'=>Ail::model()->status($model->surat_bap)),
															array('name'=>'surat_pdl','value'=>Ail::model()->status($model->surat_pdl)),
															array('name'=>'surat_lainlain','value'=>Ail::model()->status($model->surat_lainlain)),


															),
															)); ?>

														</div>
													</div>

													<STYLE>
														th{width:220px;}
													</STYLE>

