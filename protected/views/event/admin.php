<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Kelola Event';

$divisi = Divisi::model()->findByPk(YII::app()->user->record->divisi);

$this->menu=array(
	array('label'=>'Tambah Event', 'url'=>array('create')),
	array('label'=>'Daftar Event', 'url'=>array('index')),
	);
	?>
	<span class="hidden-xs">

		<?php echo CHtml::link('Tambah Event',
			array('create'),
			array('class' => 'btn btn-warning btn-flat'));
			?>
            <?php echo CHtml::link('Semua Event',
                array('index'),
                array('class' => 'btn btn-warning btn-flat'));
                ?>            
                <?php echo CHtml::link('Daftar Event '.$divisi->nama,
                    array('divisi'),
                    array('class' => 'btn btn-warning btn-flat'));
                    ?>
                    <?php echo CHtml::link('Verifikasi',
                        array('verifiedlist'),
                        array('class' => 'btn btn-info btn-flat'));
                        ?>   
                        <?php echo CHtml::link('Belum di Verifikasi',
                            array('unverifiedlist'),
                            array('class' => 'btn btn-warning btn-flat'));
                            ?>    

                            <?php echo CHtml::link('Pencarian',
                                array('search'),
                                array('class' => 'btn btn-warning btn-flat'));
                                ?>                              

                            </span>	

                            <HR>
                                <div class="alert alert-info">Event di sorting berdasarkan tanggal mulai kegiatan</div>
                                <?php $this->widget('zii.widgets.grid.CGridView', array(
                                    'id'=>'event-grid',
                                    'dataProvider'=>$model->search(),
                                    // 'filter'=>$model,
                                    'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
                                    'columns'=>array(

                                        array(
                                            'header'=>'No',
                                            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                                            'htmlOptions'=>array('width'=>'10px', 
                                                'style' => 'text-align: center;')),

                                        'nama_kegiatan',
                                        array('name'=>'divisi_id','value'=>'$data->Division->nama'),
                                        array('name'=>'kategori_id','value'=>'$data->Category->nama'),
                                        'tanggal_mulai',
                                        'tanggal_berakhir',

                                        array(
                                            'class'=>'CButtonColumn',
                                            'template'=>'{view}',
                                            'buttons'=>array(
                                                'view'=>
                                                array(
                                                    'url'=>'Yii::app()->createUrl("Event/view", array("id"=>$data->id_event))',
                                                    'options'=>array(
                                                        'ajax'=>array(
                                                            'type'=>'POST',
                                                            'url'=>"js:$(this).attr('href')",
                                                            'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                        )); ?>



                                        <!-- Modal -->
                                        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <!-- Popup Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title"><strong>View</strong> Event</h4>
                                                    </div>
                                                    <!-- Popup Content -->
                                                    <div class="modal-body">
                                                        <p>Details</p>
                                                    </div>
                                                    <!-- Popup Footer -->
                                                    <div class="modal-footer">
                                                        <BR>
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
