<?php
/* @var $this TugasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tugases',
	);

	$this->pageTitle='Daftar Tugas';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Tugas',
 array('create'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Tugas',
 array('admin'),
 array('class' => 'btn btn-warning btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>