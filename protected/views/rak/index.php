<?php
/* @var $this RakController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Raks',
	);

	$this->pageTitle='Daftar Rak';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Rak',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Rak',
 array('admin'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>