
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
		<li><a href="#9a" data-toggle="tab">BA</a></li>
		<li><a href="#10a" data-toggle="tab">SLO</a></li>
		<li><a href="#11a" data-toggle="tab">Lain-Lain</a></li>
	</ul>

	<div class="tab-content clearfix">

		<?php for ($i = 1; $i <= 11; $i++) { ?>

			<div class="tab-pane" id="<?php echo $i; ?>a">
				<HR>
					<?php 
					$ini = Ail::model()->fileData($i);
					$itu = Ail::model()->titleData($i);
					$nah = Ail::model()->direktoriFile($i);
					echo "<div class='alert alert-warning'>";
					echo "<h4><i class='fa fa-file-text'></i> ".$itu."</h4>";
					echo "</div>";
					$dataProvider=new CActiveDataProvider($ini,array('criteria'=>array('condition'=>'status=1 AND ail_id='.$model->id_ail)));

					echo "<div class='row'>";
					foreach($dataProvider->getData() as $data){

						echo "<div class='col-sm-6 col-lg-6'>";
						echo "<div class='widget-simple-chart text-right card-box'>";
						echo "<h3 class='text-success counter'><a href='".YII::app()->baseUrl."/file/".$nah."/".$data->file."'>Download File</a></h3>";
						echo "<p class='text-muted'>Tanggal Upload : ".$data->tanggal_buat." </BR>Tanggal Update : ".$data->tanggal_update."</p>";
						echo "</div>";
						echo "</div>";

					}
					echo "</div>";
					?>

				</div>

				<?php } ?>

			</div>
		</div>



