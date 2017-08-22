<?php
$dataProvider=new CActiveDataProvider('Event');
$this->widget('EExcelWriter', array(
    'dataProvider' => $dataProvider,
    'title'        => 'EExcelWriter',
    'stream'       => FALSE,
    'fileName'     => 'Report Kegiatan.xls',
    'columns'      => array(
            
       'nama_kegiatan',
                                        array('name'=>'divisi_id','value'=>'$data->Division->nama'),
                                        array('name'=>'kategori_id','value'=>'$data->Category->nama'),
                                        'tanggal_mulai',
                                        'tanggal_berakhir',

						),
));

?>

<div class="pad margin no-print">
    <div class="alert alert-success" style="margin-bottom: 0!important;">
        <i class="fa fa-info"></i>
        <center>Data Laporan Kegiatan telah disimpan ke Excel, <b><a href="./Report Penilaian.xls"/>Download Laporan</a></b></center>
    </div>
</div>