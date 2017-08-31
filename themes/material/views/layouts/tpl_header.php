<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mugi Rachmat">
    
    <?php
    $baseUrl = Yii::app()->theme->baseUrl; 
    $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCoreScript('jquery');
    ?>
    
    <!-- DataTables -->
    <link href="<?php echo $baseUrl;?>/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl;?>/assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />

    <link rel="Shortcut Icon" href="<?php echo yii::app()->request->baseurl; ?>/assets/theme/images/logo.jpg" type="image/x-icon" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo $baseUrl;?>/assets/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">
