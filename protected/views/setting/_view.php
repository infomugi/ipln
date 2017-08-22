<?php
/* @var $this SettingController */
/* @var $data Setting */
?>

	<?php echo CHtml::link('Edit', 
		array('update', 'id'=>$data->id_setting,
			), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Setting'));
			?>
			<?php echo CHtml::link('Logo', 
				array('logo', 'id'=>$data->id_setting,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Logo'));
					?>
					<?php echo CHtml::link('Favicon', 
						array('favicon', 'id'=>$data->id_setting,
							), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Favicon'));
							?>		
			<HR>

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
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