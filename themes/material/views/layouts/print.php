<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link href="<?php echo $baseUrl;?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<STYLE>
		#cetak{width:800px;}
	</STYLE>

	<div id="cetak">
		<header>
			<H1><center><B><?php echo YII::app()->name; ?></B></center></H1>
			<HR>
			</header>
			<?php echo $content ?>
		</div>

	</body>
	</html>
