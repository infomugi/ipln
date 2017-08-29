 <!-- Navigation Bar-->
 <header id="topnav">
  <div class="topbar-main">
    <div class="container">

      <!-- Logo container-->
      <div class="logo">
        <a href="#" class="logo"><i class="md md-flash-on"></i> <span><?php echo YII::app()->name; ?></span> </a>
      </div>
      <!-- End Logo container-->

      <div class="menu-extras">

        <ul class="nav navbar-nav navbar-right pull-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo $baseUrl;?>/assets/images/logo.png" alt="user-img" class="img-circle"> </a>
            <?php 
            $this->widget('zii.widgets.CMenu',array(
             'htmlOptions' => array( 'class' => 'dropdown-menu' ),
             'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
             'itemCssClass'=>'item-test',
             'encodeLabel'=>false,
             'items'=>array(
              array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
              ),
             )); 

             ?>

           </li>
         </ul>

         <div class="menu-item">
          <!-- Mobile menu toggle-->
          <a class="navbar-toggle">
            <div class="lines">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
          <!-- End mobile menu toggle-->
        </div>
      </div>

    </div>
  </div>
  <!-- End topbar -->


  <!-- Navbar Start -->
  <div class="navbar-custom">
    <div class="container">
      <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu pull-right">


         <?php 

         if(Yii::app()->user->record->level==1){

          $this->widget('zii.widgets.CMenu',array(
            'htmlOptions' => array( 'class' => 'navigation-menu submenu' ),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'itemCssClass'=>'item-test',
            'encodeLabel'=>false,
            'items'=>array(
             array('label'=>'Registrasi AIL', 'url'=>array('/site/registrasi'), 'visible'=>!Yii::app()->user->isGuest),
             array('label'=>'Kelola AIL', 'url'=>array('/ail/admin'), 'visible'=>!Yii::app()->user->isGuest),
             array('label'=>'Lemari', 'url'=>array('/lemari/admin'), 'visible'=>!Yii::app()->user->isGuest),
             array('label'=>'Pelanggan', 'url'=>array('/pelanggan/admin'), 'visible'=>!Yii::app()->user->isGuest),
             array('label'=>'Petugas', 'url'=>array('/petugas/admin'), 'visible'=>!Yii::app()->user->isGuest),
             ),
            )); 

        }else{

          $this->widget('zii.widgets.CMenu',array(
            'htmlOptions' => array( 'class' => 'navigation-menu submenu' ),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'itemCssClass'=>'item-test',
            'encodeLabel'=>false,
            'items'=>array(
             array('label'=>'Registrasi AIL', 'url'=>array('/site/registrasi'), 'visible'=>!Yii::app()->user->isGuest),
             array('label'=>'Kelola AIL', 'url'=>array('/ail/admin'), 'visible'=>!Yii::app()->user->isGuest),
             array('label'=>'Pelanggan', 'url'=>array('/pelanggan/admin'), 'visible'=>!Yii::app()->user->isGuest),
             ),
            )); 

        }

        ?>


      </ul>
      <!-- End navigation menu -->
    </div>
  </div>
</div>
</header>
<!-- End Navigation Bar-->



