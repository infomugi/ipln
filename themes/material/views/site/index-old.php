<?php 
$this->pageTitle='Dashboard';
$dataDivisi=new CActiveDataProvider('Divisi');
$dataKategori=new CActiveDataProvider('Kategori');
$dataEvent=new CActiveDataProvider('Event');
$dataTugas=new CActiveDataProvider('Tugas',array('criteria'=>array('condition'=>'petugas_id='.YII::app()->user->id)));
?>

<?php 
$this->widget('ext.fullcalendar.EFullCalendarHeart', array(
	'themeCssFile'=>'cupertino/jquery-ui.min.css',
	'options'=>array(
		'header'=>array(
			'left'=>'prev,next,today',
			'center'=>'title',
			'right'=>'month,agendaWeek,agendaDay',
			),
		'events'=>$this->createUrl('event/kalender'),
		'eventClick'=> 'js:function(calEvent, jsEvent, view) {
			$("#event-header").html(calEvent.title);
			$("#event-body").load("'.Yii::app()->createUrl("event/view").'"+calEvent.id+"?asModal=true");
			$("#event-modal").modal();
		}',
		)));
		?>

		<div class="col-md-6">
			

			<H4><i class="fa fa-calendar"></i> Kegiatan Bidang BPS</H4>
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
				<div class="col-md-6">


					<H4><i class="fa fa-tags"></i> Kategori Kegiatan BPS</H4>
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


						<div class="col-md-12">


							<H4><i class="fa fa-archive"></i> Daftar Kegiatan</H4>
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
									'skala',
									'prioritas',

									),
									)); ?>	
								</div>

								<div class="col-md-12">

									<H4><i class="fa fa-tasks"></i> Daftar Tugas</H4>
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

											
											array(
												'name'=>'petugas_id',
												'value'=>'$data->Employee->nama'
												),
											'tanggal_mulai',
											'tanggal_selesai',

											),
											)); ?>	
										</div>