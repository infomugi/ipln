<?php
/* @var $this KategoriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kategoris',
	);

$this->pageTitle='Daftar Kategori';
?>


<?php echo CHtml::link('Tambah Kategori',
	array('create'),
	array('class' => 'btn btn-warning btn-flat'));
	?>
	<?php echo CHtml::link('Kelola Kategori',
		array('admin'),
		array('class' => 'btn btn-warning btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

