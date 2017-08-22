<?php
/* @var $this AilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ails',
	);

	$this->pageTitle='Daftar Ail';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Ail',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Ail',
 array('admin'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>