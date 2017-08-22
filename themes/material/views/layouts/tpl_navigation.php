<section id="navigation-main">  
  <div class="navbar">
   <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="nav-collapse">
       <?php 

       if(YII::app()->user->getLevelAccess()==1){

         $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array('class'=>'nav'),
          'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
          'itemCssClass'=>'item-test',
          'encodeLabel'=>false,
          'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Event', 'url'=>array('/event/admin'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Petugas', 'url'=>array('/petugas/admin'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Report', 'url'=>array('/event/report'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
          )); 

       }else if(YII::app()->user->getLevelAccess()==2){

         $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array('class'=>'nav'),
          'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
          'itemCssClass'=>'item-test',
          'encodeLabel'=>false,
          'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Daftar Kegiatan', 'url'=>array('/event/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Daftar Divisi', 'url'=>array('/divisi/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Daftar Petugas', 'url'=>array('/petugas/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Profile', 'url'=>array('/petugas/view&id='.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Report', 'url'=>array('/event/report'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
          )); 

       }else if(YII::app()->user->getLevelAccess()==3){

         $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array('class'=>'nav'),
          'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
          'itemCssClass'=>'item-test',
          'encodeLabel'=>false,
          'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Buat Kegiatan', 'url'=>array('/event/new'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Daftar Kegiatan', 'url'=>array('/event/divisi'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Monitoring', 'url'=>array('/event/monitor'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Team', 'url'=>array('/petugas/list'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Profile', 'url'=>array('/petugas/view&id='.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
          )); 

       }else if(YII::app()->user->getLevelAccess()==4){

         $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array('class'=>'nav'),
          'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
          'itemCssClass'=>'item-test',
          'encodeLabel'=>false,
          'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Daftar Kegiatan', 'url'=>array('/event/divisi'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Profile', 'url'=>array('/petugas/view&id='.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
          ));        

       }else{

         $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array('class'=>'nav'),
          'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
          'itemCssClass'=>'item-test',
          'encodeLabel'=>false,
          'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
          )); 

       }
       ?>
     </div>
   </div>
 </div>
</div>
</section><!-- /#navigation-main -->