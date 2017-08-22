<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Laporkan Progress';
?>

<H3><?php echo $model->nama_kegiatan; ?></H3>
<?php echo $this->renderPartial('_form_progress', array('model'=>$model)); ?>