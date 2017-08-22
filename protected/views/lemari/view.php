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
<div class="alert alert-<?php echo Lemari::model()->tipe($model->tipe); ?>">Kapasitas Dokumen / Laci Sebanyak 450 Dokumen Map</div>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<?php for ($a = 1; $a <= 7; $a++) { ?>
					<th><span class="label label-warning"><?php echo $a; ?></span></th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php for ($x = 1; $x <= 7; $x++) { ?>
					<tr>
						<th><span class="label label-warning"><?php echo $x; ?></span></th>

						<?php for ($i = 1; $i <= 7; $i++) { ?>

							<td>
								<?php echo CHtml::link("Laci " . $model->kode.$x.'-'.$i, 
									array('ail/create', 'lemari'=>$model->id_lemari,
										'rak'=>$model->kode.$x.'-'.$i,
										'kolom'=>$i,
										'baris'=>$x,
										'rak_id'=>$x,
										), array('class' => 'btn btn-sm btn-'.Lemari::model()->tipe($model->tipe).' btn-flat', 'title'=>$model->deskripsi . " - " . $model->kode.$x.'-'.$i));
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