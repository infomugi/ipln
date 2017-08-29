
<div id="exTab1">	
	<ul  class="nav nav-pills">

		<li class="active"><a  href="#1a" data-toggle="tab">Permohonan</a></li>
		<li><a href="#2a" data-toggle="tab">Identitas</a></li>
		<li><a href="#3a" data-toggle="tab">Data Survei</a></li>
		<li><a href="#4a" data-toggle="tab">Jawaban</a></li>
		<li><a href="#5a" data-toggle="tab">Perjanjian</a></li>
		<li><a href="#6a" data-toggle="tab">Pernyataan</a></li>
		<li><a href="#7a" data-toggle="tab">Kuitansi</a></li>
		<li><a href="#8a" data-toggle="tab">Perintah Kerja</a></li>
		<li><a href="#9a" data-toggle="tab">BAP</a></li>
		<li><a href="#10a" data-toggle="tab">PDL</a></li>
		<li><a href="#11a" data-toggle="tab">Lain-Lain</a></li>
	</ul>

	<div class="tab-content clearfix">

		<?php for ($i = 1; $i <= 11; $i++) { ?>

			<div class="tab-pane" id="<?php echo $i; ?>a">
				<HR>
					<?php 
					$ini = Ail::model()->fileData($i);
					$itu = Ail::model()->titleData($i);
					echo "<div class='alert alert-warning'>";
					echo "<h4><i class='fa fa-file-text'></i> ".$itu."</h4>";
					echo "</div>";
					$dataProvider=new CActiveDataProvider($ini,array('criteria'=>array('condition'=>'status=1 AND ail_id='.$model->id_ail)));
					$this->widget('zii.widgets.grid.CGridView', array(
						'id'=>$i.'-grid',
						'dataProvider'=>$dataProvider,
						'summaryText'=>'',
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							// array(
							// 	'header'=>'No',
							// 	'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							// 	'htmlOptions'=>array('width'=>'10px', 
							// 		'style' => 'text-align: center;')),
							// 'file',

							'tanggal_buat',
							'tanggal_update',
							'deskripsi',
							// array(
							// 	'class'=>'CButtonColumn',
							// 	'template'=>'{view}',
							// 	'buttons'=>array(
							// 		'view'=>
							// 		array(
							// 			'url'=>'Yii::app()->createUrl($ini."/view", array("id"=>$data->id))',
							// 			),
							// 		),
							// 	),
							),
						)); 

					?>

				</div>

				<?php } ?>

			</div>
		</div>

