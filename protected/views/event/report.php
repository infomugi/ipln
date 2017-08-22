<?php 
$this->pageTitle='Dashboard';
$dataDivisi=new CActiveDataProvider('Divisi');
$dataKategori=new CActiveDataProvider('Kategori');
$dataEvent=new CActiveDataProvider('Event');
$dataTugas=new CActiveDataProvider('Tugas',array('criteria'=>array('condition'=>'petugas_id='.YII::app()->user->id)));
?>
<!--Panel heading-->
<div class="panel-heading">
	<div class="panel-control">

		<!--Nav tabs-->
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#demo-tabs-box-1"><i class="fa fa-print"></i> Laporan Bidang BPS</a></li>
			<li><a data-toggle="tab" href="#demo-tabs-box-2"><i class="fa fa-print"></i> Laporan Kategori Kegiatan</a></li>
			<li><a data-toggle="tab" href="#demo-tabs-box-3"><i class="fa fa-print"></i> Laporan Kegiatan</a></li>
			<li><a data-toggle="tab" href="#demo-tabs-box-4"><i class="fa fa-print"></i> Laporan Penugasan</a></li>
		</ul>

	</div>
</div>

<!--Panel body-->
<div class="panel-body">

	<!--Tabs content-->
	<div class="tab-content">
		<div id="demo-tabs-box-1" class="tab-pane fade in active">
			<div class="alert alert-info">
				<H3><i class="fa fa-print"></i> Report Kegiatan Bidang BPS</H3>
			</div>
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'divisi-grid',
				'dataProvider'=>$dataDivisi,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'nama',

					array(
						'header'=>'Jumlah Kegiatan',
						'value'=>'Event::model()->divisi($data->id_divisi)'
						),


					),
					)); ?>

				</div>
				<div id="demo-tabs-box-2" class="tab-pane fade">
				<div class="alert alert-warning">
					<H3><i class="fa fa-print"></i> Report Kategori Kegiatan BPS</H3>
				</div>
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'divisi-grid',
						'dataProvider'=>$dataKategori,
						'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'nama',

							array(
								'header'=>'Jumlah Kegiatan',
								'value'=>'Event::model()->kategori($data->id_kategori)'
								),


							),
							)); ?>	
						</div>
						<div id="demo-tabs-box-3" class="tab-pane fade">
							<div class="alert alert-danger">
							<H3><i class="fa fa-print"></i> Report Daftar Kegiatan</H3>
							</div>
							<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'divisi-grid',
								'dataProvider'=>$dataEvent,
								'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
								'columns'=>array(

									array(
										'header'=>'No',
										'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
										'htmlOptions'=>array('width'=>'10px', 
											'style' => 'text-align: center;')),

									'nama_kegiatan',
									'persentase',
									'target',

									),
									)); ?>	

								</div>

								<div id="demo-tabs-box-4" class="tab-pane fade">
								<div class="alert alert-success">
									<H3><i class="fa fa-print"></i> Report Daftar Tugas</H3>
									</div>
									<?php $this->widget('zii.widgets.grid.CGridView', array(
										'id'=>'divisi-grid',
										'dataProvider'=>$dataTugas,
										'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
										'columns'=>array(

											array(
												'header'=>'No',
												'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
												'htmlOptions'=>array('width'=>'10px', 
													'style' => 'text-align: center;')),

											'petugas_id',
											'tanggal_mulai',
											'tanggal_selesai',

											),
											)); ?>	
										</div>


									</div>

								</div>
							</div>



