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
	array('printkodemap', 'id'=>$model->id_ail,
		), array('class' => 'btn btn-success btn-flat', 'title'=>'Print Kode MAP untuk AIL'));
		?>

		<?php echo CHtml::link('Print Hasil Verifikasi', 
			array('printverifikasi', 'id'=>$model->id_ail,
				), array('class' => 'btn btn-success btn-flat', 'title'=>'Print Hasil Verifikasi AIL'));
				?>

				<?php echo CHtml::link('Edit AIL', 
					array('update', 'id'=>$model->id_ail,
						), array('class' => 'btn btn-success btn-flat', 'title'=>'Edit Ail'));
						?>


						<div class="btn-group pull-right">
							<button type="button" class="btn btn-success">Upload Dokumen</button>
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<?php echo CHtml::link('Surat Permohonan', 
										array('filepermohonan/create', 'id'=>$model->id_ail,'name'=>"surat-permohonan",
											), array('title'=>'Upload Surat Permohonan'));
											?>
										</li>
										<li>
											<?php echo CHtml::link('Surat Identitas Pelanggan', 
												array('filepelanggan/create', 'id'=>$model->id_ail,'name'=>"surat-pelanggan",
													), array('title'=>'Upload Identitas Pelanggan'));
													?>
												</li>
												<li>
													<?php echo CHtml::link('Surat Data Survei', 
														array('filesurvei/create', 'id'=>$model->id_ail,'name'=>"surat-survei",
															), array('title'=>'Upload Surat Data Survein'));
															?>
														</li>
														<li>
															<?php echo CHtml::link('Surat Jawaban', 
																array('filejawaban/create', 'id'=>$model->id_ail,'name'=>"surat-jawaban",
																	), array('title'=>'Upload Surat Jawaban'));
																	?>
																</li>
																<li>
																	<?php echo CHtml::link('Surat Perjanjian', 
																		array('fileperjanjian/create', 'id'=>$model->id_ail,'name'=>"surat-perjanjian",
																			), array('title'=>'Upload Perjanjian'));
																			?>
																		</li>

																		<li>
																			<?php echo CHtml::link('Surat Pernyataan', 
																				array('filepernyataan/create', 'id'=>$model->id_ail,'name'=>"surat-pernyataan",
																					), array('title'=>'Upload Surat Pernyataan'));
																					?>
																				</li>

																				<li>
																					<?php echo CHtml::link('Surat Kuitansi', 
																						array('filekuitansi/create', 'id'=>$model->id_ail,'name'=>"surat-kuitansi",
																							), array('title'=>'Upload Surat Kuitansi'));
																							?>
																						</li>

																						<li>
																							<?php echo CHtml::link('Surat Perintah Kerja', 
																								array('fileperintahkerja/create', 'id'=>$model->id_ail,'name'=>"surat-perintah-kerja",
																									), array('title'=>'Upload Surat Perintah Kerja'));
																									?>
																								</li>

																								<li>
																									<?php echo CHtml::link('Surat BAP', 
																										array('filebap/create', 'id'=>$model->id_ail,'name'=>"surat-bap",
																											), array('title'=>'Upload Surat BAP'));
																											?>
																										</li>

																										<li>
																											<?php echo CHtml::link('Surat PDL', 
																												array('filepdl/create', 'id'=>$model->id_ail,'name'=>"surat-pdl",
																													), array('title'=>'Upload Surat PDL'));
																													?>
																												</li>

																												<li>
																													<?php echo CHtml::link('Surat Lain-Lain', 
																														array('filelain/create', 'id'=>$model->id_ail,'name'=>"surat-lain",
																															), array('title'=>'Upload Surat Lain-Lain'));
																															?>
																														</li>
																													</ul>
																												</div> 

																												<HR>

																													<div class="row">
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

																																					

																																					<?php include "_view_tab.php"; ?>


																																					<STYLE>
																																						th{width:220px;}
																																					</STYLE>

