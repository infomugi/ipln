<?php

class PetugasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
			);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('admin','delete','create','update','index','view','password'),
				'expression'=>'$user->getLevelAccess()==1',
				),
			array('allow', 
				'actions'=>array('admin','delete','create','update','index','view','password'),
				'expression'=>'$user->getLevelAccess()==2',
				),	
			array('allow', 
				'actions'=>array('view','update','password','list'),
				'expression'=>'$user->getLevelAccess()==3',
				),	
			array('allow', 
				'actions'=>array('view','update','password'),
				'expression'=>'$user->getLevelAccess()==4',
				),									
			array('deny',  // deny all users
				'users'=>array('*'),
				),
			);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$data=Petugas::model()->findByPk($id);
		$access=YII::app()->user->getLevelAccess()==1;
		$accessTop=YII::app()->user->getLevelAccess()==2;
		$accessMiddle=YII::app()->user->getLevelAccess()==3;
		$accessLow=YII::app()->user->getLevelAccess()==4;

		if($access==$data->level){

			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));

		}else if($accessTop==$data->level){

			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));

		}else if(YII::app()->user->getDivisionAccess()==$data->divisi && $accessMiddle==$data->level){

			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));

		}else if(YII::app()->user->getDivisionAccess()==$data->divisi && $accessLow==$data->level){

			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));		

		}else{

			throw new CHttpException(403,'Anda tidak diotorisasi untuk melihat pengguna bagian lain.');

		}


	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Petugas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Petugas']))
		{
			$model->attributes=$_POST['Petugas'];
			if($model->save())
				$model->password = md5($model->password);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_petugas));
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$data=Petugas::model()->findByPk($id);
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Petugas']))
		{
			$model->attributes=$_POST['Petugas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_petugas));
		}

		if(YII::app()->user->getLevelAccess()==1){
		
		$this->render('update',array(
			'model'=>$model,
			));

		}else if($data->id_petugas==YII::app()->user->id && YII::app()->user->getLevelAccess()==2){
		
		$this->render('update',array(
			'model'=>$model,
			));

		}else if($data->id_petugas==YII::app()->user->id && YII::app()->user->getLevelAccess()==3){
		
		$this->render('update',array(
			'model'=>$model,
			));

		}else if($data->id_petugas==YII::app()->user->id && YII::app()->user->getLevelAccess()==4){
		
		$this->render('update',array(
			'model'=>$model,
			));		

		}else{
			throw new CHttpException(403,'Anda tidak diotorisasi untuk melakukan ini.');
		}
	}


	public function actionPassword($id)
	{
		$data=Petugas::model()->findByPk($id);
		

		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Petugas']))
		{
			$model->attributes=$_POST['Petugas'];
			if($model->save())
				$model->password = md5($model->password);
			if($model->save())				
				$this->redirect(array('view','id'=>$model->id_petugas));
		}

		if($data->id_petugas==YII::app()->user->id && YII::app()->user->getLevelAccess()==1){
		
		$this->render('password',array(
			'model'=>$model,
			));

		}else if($data->id_petugas==YII::app()->user->id && YII::app()->user->getLevelAccess()==2){
		
		$this->render('password',array(
			'model'=>$model,
			));

		}else if($data->id_petugas==YII::app()->user->id && YII::app()->user->getLevelAccess()==3){
		
		$this->render('password',array(
			'model'=>$model,
			));

		}else if($data->id_petugas==YII::app()->user->id && YII::app()->user->getLevelAccess()==4){
		
		$this->render('password',array(
			'model'=>$model,
			));		

		}else{
			throw new CHttpException(403,'Anda tidak diotorisasi untuk melakukan ini.');
		}
	}	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Petugas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionList()
	{
		$dataProvider=new CActiveDataProvider('Petugas',array(
			'criteria'=>array(
				'condition'=>'divisi = '.YII::app()->user->record->divisi,
				)
			));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Petugas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Petugas']))
			$model->attributes=$_GET['Petugas'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Petugas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Petugas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Petugas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='petugas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
