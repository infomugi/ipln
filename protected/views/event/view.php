<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Detail Event';

$this->menu=array(
	array('label'=>'Daftar Event', 'url'=>array('index')),
	array('label'=>'Kelola Event', 'url'=>array('admin')),
	);
	?>
	<?php echo CHtml::link('Kelola',
		array('admin'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Manage Event'));
		?>
		<?php echo CHtml::link('Edit', 
			array('update', 'id'=>$model->id_event,
				), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Event'));
				?>
				<?php echo CHtml::link('Update Progress', 
					array('progress', 'id'=>$model->id_event,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Event'));
						?>
						<?php echo CHtml::link('Update Hasil', 
							array('result', 'id'=>$model->id_event,
								), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Event'));
								?>												
								<?php echo CHtml::link('Print', 
									array('print', 'id'=>$model->id_event,
										),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Print Event'));
										?>
										<?php echo CHtml::link('Verifikasi', 
											array('verifikasi', 'id'=>$model->id_event,
												), array('class' => 'btn btn-info btn-flat', 'title'=>'Verifikasi Event'));
												?>

												<HR>

													<div class="progress">
														<div class="progress-bar progress-bar-striped active progress-bar-animated progress-bar-success " role="progressbar" role="progressbar" aria-valuenow="<?php echo $model->persentase; ?>" aria-valuemin="0" aria-valuemax="<?php echo $model->target; ?>" style="width:<?php echo $model->persentase; ?>%">
															<span class="sr-only"><?php echo $model->persentase; ?>% Complete</span>
														</div>
														<div class="progress-bar progress-bar-danger progress-bar-animated" role="progressbar" style="width:<?php echo 100-$model->persentase; ?>%">
														</div>
													</div>


													<!--Panel heading-->
													<div class="panel-heading">
														<div class="panel-control">

															<!--Nav tabs-->
															<ul class="nav nav-tabs">
																<li class="active"><a data-toggle="tab" href="#demo-tabs-box-1"><i class="fa fa-tasks"></i> Data Kegiatan</a></li>
																<li><a data-toggle="tab" href="#demo-tabs-box-2"><i class="fa fa-table"></i> Info Kegiatan</a></li>
																<li><a data-toggle="tab" href="#demo-tabs-box-3"><i class="fa fa-dashboard"></i> Progress Kegiatan</a></li>
															</ul>

														</div>
													</div>

													<!--Panel body-->
													<div class="panel-body">

														<!--Tabs content-->
														<div class="tab-content">
															<div id="demo-tabs-box-1" class="tab-pane fade in active">

																<H3><i class="fa fa-tasks"></i> Data</H3>
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table "),
																	'attributes'=>array(
																		'id_event',
																		'tanggal',
																		array(
																			'name'=>'divisi_id',
																			'value'=>$model->Division->nama
																			),
																		array(
																			'name'=>'kategori_id',
																			'value'=>$model->Category->nama
																			),

																		array(
																			'name'=>'petugas_id',
																			'value'=>$model->Employee->nama
																			),
																		'status',
																		'prioritas',
																		'skala',
																		),
																		)); ?>

																	</div>
																	<div id="demo-tabs-box-2" class="tab-pane fade">

																		<H3><i class="fa fa-table"></i> Informasi</H3>
																		<?php $this->widget('zii.widgets.CDetailView', array(
																			'data'=>$model,
																			'htmlOptions'=>array("class"=>"table "),
																			'attributes'=>array(

																				'tanggal_mulai',
																				'tanggal_berakhir',
																				'nama_kegiatan',
																				'deskripsi',

																				),
																				)); ?>

																			</div>
																			<div id="demo-tabs-box-3" class="tab-pane fade">

																				<H3><i class="fa fa-dashboard"></i> Progress</H3>
																				<?php $this->widget('zii.widgets.CDetailView', array(
																					'data'=>$model,
																					'htmlOptions'=>array("class"=>"table "),
																					'attributes'=>array(
																						'hasil',
																						'progress',
																						array(
																							'name'=>'persentase',
																							'value'=>$model->persentase . " %"
																							),
																						array(
																							'name'=>'target',
																							'value'=>$model->target . " %"
																							),																																	

																						),
																						)); ?>

																					</div>

																				</div>
																			</div>

																			<H3><i class="fa fa-user"></i> Detail Penugasan</H3>

																			<?php if(YII::app()->user->record->level!=4): ?>
																				<?php echo CHtml::link('Tambah Penugasan', 
																					array('tugas/create', 'id'=>$model->id_event,
																						),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Tambah Penugasan'));
																						?>
																					<?php endif; ?>
																					<HR>

																						<?php 
																						$bobot =  Yii::app()->db->createCommand("SELECT SUM(bobot) FROM tugas where event_id=".$model->id_event."")->queryScalar();
																						$nilai = 100-$bobot;
																						?>

																						<?php if($bobot > 100){ ?>
																							<div class="alert alert-danger"><H3>Jumlah Maksimal Presentasi Kegiatan 100%</H3></div>
																							<?php }else{ ?>
																								<div class="alert alert-warning"><H3>Presentasi Kegiatan Kurang <?php echo $nilai ?>%</H3></div>
																								<?php } ?>

																								<?php 
																								$dataProvider=new CActiveDataProvider('Tugas',array('criteria'=>array('condition'=>'event_id='.$model->id_event)));
																								$this->widget('zii.widgets.grid.CGridView', array(
																									'id'=>'tugas-grid',
																									'dataProvider'=>$dataProvider,
																									'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
																									'columns'=>array(

																										array(
																											'header'=>'No',
																											'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																											'htmlOptions'=>array('width'=>'10px', 
																												'style' => 'text-align: center;')),

																										array(
																											'name'=>'tanggal_mulai',
																											'value'=>'Tugas::model()->date($data->tanggal_mulai)'
																											),	

																										array(
																											'name'=>'tanggal_selesai',
																											'value'=>'Tugas::model()->date($data->tanggal_selesai)'
																											),
																										'deskripsi',
																					// array(
																					// 	'name'=>'petugas_id',
																					// 	'value'=>'$data->Employee->nama'
																					// 	),			

																										array(
																											'name'=>'status',
																											'value'=>'Tugas::model()->status($data->status)'),

																										'bobot',

																										array(
																											'class' => 'CButtonColumn',
																											'template' => '{view}{update}{delete}',
																											'class'=>'CButtonColumn',
																											'htmlOptions'=>array('width'=>'300px', 
																												'style' => 'text-align: center;'),
																											'viewButtonUrl' => 'Yii::app()->controller->createUrl("tugas/view",array("id"=>$data->id_tugas))',
																											'updateButtonUrl' => 'Yii::app()->controller->createUrl("tugas/update",array("id"=>$data->id_tugas))',
																											'deleteButtonUrl' => 'Yii::app()->controller->createUrl("tugas/delete",array("id"=>$data->id_tugas))',
																											),


																										),
																										)); ?> 

																								<STYLE>
																									th{width:300px;}
																								</STYLE>
