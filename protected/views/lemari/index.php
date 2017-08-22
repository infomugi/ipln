<?php
/* @var $this LemariController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lemaris',
	);

$this->pageTitle='List Lemari';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Lemari'));
		?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat','title'=>'Manage Lemari'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Add',
				array('create'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Add Lemari'));
				?>
				<?php echo CHtml::link('Manage',
					array('admin'),
					array('class' => 'btn btn-primary btn-flat','title'=>'Manage Lemari'));
					?>

				</span>

				<HR>

					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
						)); ?>

