<?php
/* @var $this AilController */
/* @var $model Ail */

$this->breadcrumbs=array(
	'Ails'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Ail';
?>



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

					// 'id_ail',
		'tanggal_buat',
		'kode_map',
		// array('name'=>'petugas_id','value'=>'$data->Petugas->nama'),
		array('name'=>'pelanggan_id','value'=>'$data->Pelanggan->kode','filter' => CHtml::activeTextField($model, 'searchKode'),),

					// 'tanggal_update',
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
			'class'=>'CButtonColumn',
			'template'=>'{update}',
			'header'=>'Edit AIL',
			'buttons'=>array(
					//Button Print
				'update'=>
				array(
					'label'=>'Edit',
					'url'=>'Yii::app()->createUrl("ail/update", array("id"=>$data->id_ail))',
					'imageUrl'=>Yii::app()->request->baseUrl.'/images/edit.png',
					),


				),
			),

		array(
			'class'=>'CButtonColumn',
			'template'=>'{report}',
			'header'=>'Print Map',
			'buttons'=>array(
					//Button Print
				'report'=>
				array(
					'label'=>'Print Map',
					'url'=>'Yii::app()->createUrl("ail/printkodemap", array("id"=>$data->id_ail))',
					'imageUrl'=>Yii::app()->request->baseUrl.'/images/print.png',
					),


				),
			),

		array(
			'class'=>'CButtonColumn',
			'template'=>'{report}',
			'header'=>'Print Verifikasi',
			'buttons'=>array(
					//Button Print
				'report'=>
				array(
					'label'=>'Print Verifikasi',
					'url'=>'Yii::app()->createUrl("ail/printverifikasi", array("id"=>$data->id_ail))',
					'imageUrl'=>Yii::app()->request->baseUrl.'/images/print.png',
					),


				),
			),		

		array(
			'header'=>'Action',
			'template'=>'{view}{delete}',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
				'style' => 'text-align: center;'),
			),
		),
		)); ?>


<?php echo CHtml::link('Registrasi AIL',
	array('site/registrasi'),
	array('class' => 'btn btn-warning pull-left btn-flat'));
	?>

	<BR>
		<BR>

