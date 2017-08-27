<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	$model->id_ail,
	);

$this->pageTitle='Cetak Hasil Verifikasi Berkas - '.$model->kode_map;
?>



<div class="row">


	<div class="col-md-8 col-md-offset-2">

		<h3><i class="fa fa-user"></i> Data Pelanggan</h3>

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


				<h3><i class="fa fa-file-text"></i> Hasil Rekaman Arsip Induk</h3>

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

