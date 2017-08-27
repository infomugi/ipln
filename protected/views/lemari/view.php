<?php
/* @var $this LemariController */
/* @var $model Lemari */

$this->breadcrumbs=array(
	'Lemaris'=>array('index'),
	$model->id_lemari,
	);

$this->pageTitle='Detail Lemari - '.$model->kode;

?>

<h4><i class="fa fa-file-text"></i> Nomor Lemari <?php echo $model->kode;  ?> - <?php echo $model->deskripsi; ?></h4>
<div class="alert alert-<?php echo Lemari::model()->tipe($model->tipe); ?>">Kapasitas Dokumen / Laci Sebanyak <?php echo $model->maksimal; ?> Dokumen Map</div>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<?php for ($a = 1; $a <= $model->kolom; $a++) { ?>
					<th><span class="label label-<?php echo Lemari::model()->tipe($model->tipe); ?>"><?php echo $a; ?></span></th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php for ($x = 1; $x <= $model->baris; $x++) { ?>
					<tr>
						<th><span class="label label-<?php echo Lemari::model()->tipe($model->tipe); ?>"><?php echo $x; ?></span></th>

						<?php for ($i = 1; $i <= $model->kolom; $i++) { ?>

							<td>
								<?php 
								$kode = $model->kode.$x.'-'.$i;
								$quota = Yii::app()->db->createCommand("SELECT COUNT(kode_rak) FROM ail where kode_rak='".$kode."'")->queryScalar();
								if($quota >= 1 && $quota <= $model->maksimal){

									echo CHtml::link("Laci " . $model->kode.$x.'-'.$i, 
										array('lemari/view', 'id'=>$model->id_lemari,
											), array('class' => 'btn btn-sm btn-'.Lemari::model()->tipe($model->tipe).' btn-flat', 'title'=>$model->deskripsi . " - " . $model->kode.$x.'-'.$i));
								}else{
									echo "<div class='label label-warning'>Masih Kosong</div>";
								}

								?>
							</td>

							<?php } ?>

						</tr>

						<?php } ?>

					</tbody>
				</table>
			</div>







			<script>
				$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();
				});
			</script>