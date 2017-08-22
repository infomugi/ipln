<?php
/* @var $this EventController */
/* @var $model Event */
$this->pageTitle='Edit Event';
?>

<H3>Edit - <?php echo $model->nama_kegiatan; ?></H3>
<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>