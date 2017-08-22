<?php
/* @var $this DivisiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Divisis',
	);

$this->pageTitle='Daftar Divisi';
?>


<?php echo CHtml::link('Tambah Divisi',
	array('create'),
	array('class' => 'btn btn-warning btn-flat'));
	?>
	<?php echo CHtml::link('Kelola Divisi',
		array('admin'),
		array('class' => 'btn btn-warning btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

