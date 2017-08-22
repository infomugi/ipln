<?php
/* @var $this TugasController */
/* @var $model Tugas */

$this->breadcrumbs=array(
	'Tugases'=>array('index'),
	$model->id_tugas,
	);

$this->menu=array(
	array('label'=>'Daftar Tugas', 'url'=>array('index')),
	array('label'=>'Kelola Tugas', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Tugas';
?>


<section class="col-xs-12">
	<?php if(Yii::app()->user->record->level==1): ?>
		<?php echo CHtml::link('Tambah',
			array('create'),
			array('class' => 'btn btn-warning btn-flat','title'=>'Tambah Tugas'));
			?>
			<?php echo CHtml::link('List',
				array('index'),
				array('class' => 'btn btn-warning btn-flat', 'title'=>'Daftar Tugas'));
				?>
				<?php echo CHtml::link('Kalola',
					array('admin'),
					array('class' => 'btn btn-warning btn-flat','title'=>'Kelola Tugas'));
					?>
					<?php echo CHtml::link('Edit', 
						array('update', 'id'=>$model->id_tugas,
							), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Tugas'));
							?>
							<?php echo CHtml::link('Hapus', 
								array('delete', 'id'=>$model->id_tugas,
									),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Tugas'));
									?>
								<?php endif; ?>

								
								<?php if($model->status==0){ ?>
									<?php echo CHtml::link('Mulai', 
										array('mulai', 'id'=>$model->id_tugas,
											), array('class' => 'btn btn-info btn-flat', 'title'=>'Mulai Tugas'));
									?>
									<?php }else if($model->status==1){ ?>

										<?php echo CHtml::link('Selesai', 
											array('selesai', 'id'=>$model->id_tugas,
												), array('class' => 'btn btn-warning btn-flat', 'title'=>'Selesai Tugas'));
										?>

										<?php }else{} ?>
										<HR>

											<?php if(Yii::app()->user->hasFlash('success')):?>
												<div class="alert alert-success">
													<?php echo Yii::app()->user->getFlash('success'); ?>
													<?php
													Yii::app()->clientScript->registerScript(
														'myHideEffect',
														'$(".alert alert-success").animate({opacity: 1.0}, 5000).fadeOut("slow");',
														CClientScript::POS_READY
														);
														?>
													</div>
												<?php endif; ?>


												<div class="alert alert-<?php echo Tugas::model()->warna($model->status) ?>">
													<?php echo Tugas::model()->status($model->status) ?>
												</div>

												<?php $this->widget('zii.widgets.CDetailView', array(
													'data'=>$model,
													'htmlOptions'=>array("class"=>"table"),
													'attributes'=>array(
														array('name'=>'event_id','value'=>$model->Event->nama_kegiatan),
														array('name'=>'petugas_id','value'=>$model->Employee->nama),
														array(
															'name'=>'tanggal_mulai',
															'value'=>Tugas::model()->date($model->tanggal_mulai)
															),	

														array(
															'name'=>'tanggal_selesai',
															'value'=>Tugas::model()->date($model->tanggal_selesai)
															),
														'deskripsi',
														'bobot',

																// array(
																// 	'name'=>'status',
																// 	'value'=>Tugas::model()->status($model->status)
																// 	),
														),
														)); ?>

													</section>

													<STYLE>
														th{width:150px;}
													</STYLE>

