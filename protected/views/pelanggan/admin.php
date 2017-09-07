<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Pelanggan';
?>

<?php echo CHtml::link('Tambah Pelanggan',
	array('create'),
	array('class' => 'btn btn-warning pull-right btn-flat'));
	?>

	<HR>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'pelanggan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

				array(
					'header'=>'No',
					'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
					'htmlOptions'=>array('width'=>'10px', 
						'style' => 'text-align: center;')),

				'kode',
				'nama',
				'alamat',

				array(
					'name'=>'tarif',
					'filter'=>array(
						'0'=>'- Pilih Tarif -',
						'1'=>'R1',
						'2'=>'R2',
						'3'=>'R1T',
						'4'=>'R2T',
						'5'=>'B1',
						'6'=>'B1T',
						),
					'value'=>'Pelanggan::model()->tarif($data->tarif)',
					),

				array(
					'name'=>'daya',
					'filter'=>array(
						'0'=>'- Pilih Daya -',
						'1'=>'450',
						'2'=>'900',
						'3'=>'1300',
						'4'=>'2200',
						'5'=>'3300',
						'6'=>'3500',
						'7'=>'4400',
						'8'=>'5500',
						'9'=>'6600',
						'10'=>'7700',
						'11'=>'10600',
						'12'=>'13200',
						'13'=>'16500',
						'14'=>'23000',
						'15'=>'33000',
						'16'=>'41500',
						'17'=>'53000',
						'18'=>'66000',
						'19'=>'82500',
						'20'=>'131000',
						'21'=>'164000',
						),
					'value'=>'Pelanggan::model()->data($data->daya)',
					),

				array(
					'header'=>'Action',
					'class'=>'CButtonColumn',
					'htmlOptions'=>array('width'=>'100px', 
						'style' => 'text-align: center;'),
					),
				),
				)); ?>

