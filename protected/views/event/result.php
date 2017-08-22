<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Laporkan Hasil Kegiatan';
?>

<H3><?php echo $model->nama_kegiatan; ?></H3>
<?php echo $this->renderPartial('_form_result', array('model'=>$model)); ?>