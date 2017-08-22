<!-- Require the header -->
<?php require_once('tpl_header.php');?>

<!-- Require the navigation -->
<?php require_once('navigation.php');?>

<div class="wrapper">
  <div class="container">

    <div class="col-lg-12">
      <div class="portlet">
        <div class="portlet-heading bg-warning">
          <h3 class="portlet-title">
            <?php echo $this->pageTitle; ?>
          </h3>
          <div class="portlet-widgets">
            <a data-toggle="collapse" data-parent="#accordion1" href="#bg-warning"><i class="ion-minus-round"></i></a>
          </div>
          <div class="clearfix"></div>
        </div>
        <div id="bg-warning" class="panel-collapse collapse in">
          <div class="portlet-body">
           <?php echo $content; ?>
         </div>
       </div>
     </div>
   </div>


 </div> <!-- end container -->
</div>
<!-- End wrapper -->


<!-- Require the footer -->
<?php require_once('tpl_footer.php')?>
