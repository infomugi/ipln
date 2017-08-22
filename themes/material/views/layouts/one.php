<!-- Require the header -->
<?php require_once('tpl_header.php');?>

<!-- Require the navigation -->
<?php require_once('navigation.php');?>

<div class="wrapper">
  <div class="container">

 <!-- Page-Title -->
 <div class="row">
  <div class="col-sm-12">
    <div class="card-box table-responsive">
        <?php echo $content; ?>
     </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer text-right">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php echo date('Y'); ?> © <?php echo YII::app()->name; ?>.
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

</div> <!-- end container -->
</div>
<!-- End wrapper -->


<!-- Require the footer -->
<?php require_once('tpl_footer.php')?>
