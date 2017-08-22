<?php
/* @var $this SettingController */
/* @var $model Setting */
$this->pageTitle='Detail Setting';

$this->menu=array(
	array('label'=>'Daftar Setting', 'url'=>array('index')),
	array('label'=>'Kelola Setting', 'url'=>array('admin')),
	);
	?>
	<?php echo CHtml::link('Edit', 
		array('update', 'id'=>$model->id_setting,
			), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Setting'));
			?>
			<?php echo CHtml::link('Logo', 
				array('update', 'id'=>$model->id_setting,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Logo'));
					?>
					<?php echo CHtml::link('Favicon', 
						array('update', 'id'=>$model->id_setting,
							), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Favicon'));
							?>						
							<HR>

								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table "),
									'attributes'=>array(
										'nama',
										'deskripsi',
										'visi',
										'misi',
										'alamat',
										'website',
										'theme',
										),
										)); ?>

								<STYLE>
									th{width:300px;}
								</STYLE>
