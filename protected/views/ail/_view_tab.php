
<div id="exTab1">	
	<ul  class="nav nav-pills">
		<?php for ($i = 1; $i <= 11; $i++) { 
			$eh = Ail::model()->titleData($i);
			$ya = Ail::model()->countFile($i,$model->id_ail);
			if($ya!=0):
				?>

			<li><a href="#<?php echo $i; ?>a" data-toggle="tab"><?php echo $eh; ?></a></li>

			<?php
			endif;
		} 
		?>
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
					$dataProvider=new CActiveDataProvider($ini,
						array('criteria'=>array(
							'condition'=>'status=1 AND ail_id='.$model->id_ail)
						));

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



