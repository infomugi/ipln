<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Daftar Event';
$this->breadcrumbs=array(
	'Events',
);

$this->menu=array(
	array('label'=>'Tambah Event', 'url'=>array('new')),
	array('label'=>'Kelola Event', 'url'=>array('admin')),
);
?>

	<span class="hidden-xs">

		<?php echo CHtml::link('Tambah Event',
 array('new'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Event',
 array('admin'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>

	</span>	

	<HR>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
