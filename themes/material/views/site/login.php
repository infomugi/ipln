<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
  'Login',
  );
  ?>

  <!-- Page container -->
  <div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

      <!-- Main content -->
      <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

          <!-- Simple login form -->
          <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
             'validateOnSubmit'=>true,
             ),
             )); ?>
             <div class="panel panel-body login-form">
              <div class="text-center">
                <img width="80%" src="<?php echo yii::app()->baseurl; ?>/images/logo.jpg" alt="Logo">
              </div>

              <div class="form-group has-feedback has-feedback-left">
               <?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder'=>'Username')); ?>
               <?php echo $form->error($model,'username', array('class'=>'text-center')); ?>
               <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
              </div>
            </div>

            <div class="form-group has-feedback has-feedback-left">
             <?php echo $form->passwordField($model,'password', array('class' => 'form-control','placeholder'=>'Password')); ?>
             <?php echo $form->error($model,'password', array('class'=>'text-center')); ?>
             <div class="form-control-feedback">
              <i class="icon-lock2 text-muted"></i>
            </div>
          </div>

          <div class="form-group">
            <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary btn-block')); ?>
          </div>

        </div>
        <?php $this->endWidget(); ?>
        <!-- /simple login form -->


        <!-- Footer -->
        <div class="footer text-muted">
          &copy; <?php echo date('Y'); ?>.
        </div>
        <!-- /footer -->

      </div>
      <!-- /content area -->

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->

</div>
<!-- /page container -->

