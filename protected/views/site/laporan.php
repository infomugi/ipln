<?php
$dataProvider=new CActiveDataProvider('Event');
$this->widget('EExcelWriter', array(
    'dataProvider' => $dataProvider,
    'title'        => 'EExcelWriter',
    'stream'       => FALSE,
    'fileName'     => 'Kegiatan.xls',
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
    <div class="alert alert-success">
            <center>Data Laporan Kegiatan telah disimpan ke Excel, <b><a href="./Penilaian.xls"/>Download Laporan</a></b></center>
        </div>
    </div>