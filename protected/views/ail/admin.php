<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	'Kelola',
	);

	$this->pageTitle='Kelola Ail';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Ail',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Daftar Ail',
 array('index'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'ail-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_ail',
		'tanggal_buat',
		'tanggal_update',
		'petugas_id',
		'pelanggan_id',
		'kode_rak',
		/*
		'rayon_id',
		'lemari_id',
		'rak_id',
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
		'deskripsi',
		'status',
		*/
			array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
			'style' => 'text-align: center;'),
			),
			),
			)); ?>
			
		</section>