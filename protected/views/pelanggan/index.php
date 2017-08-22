<?php
/* @var $this PelangganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelanggans',
	);

	$this->pageTitle='Daftar Pelanggan';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Pelanggan',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Pelanggan',
 array('admin'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>