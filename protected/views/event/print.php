<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Print Event';

$this->menu=array(
	array('label'=>'Daftar Event', 'url'=>array('index')),
	array('label'=>'Kelola Event', 'url'=>array('admin')),
	);
	?>
	<H3><i class="fa fa-tasks"></i> Event : <?php echo $model->nama_kegiatan; ?></H3>
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
			),
			)); ?>


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


					<STYLE>
						th{width:300px;}
					</STYLE>
