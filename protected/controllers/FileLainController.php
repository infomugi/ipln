<?php

class FileLainController extends Controller
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
				'actions'=>array('create','update','view','delete','admin','index','changeimage','enable','disable'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('view','index'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
				),			
			array('deny',
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
		if(Yii::app()->request->isAjaxRequest)
		{
			$this->renderPartial('view',array(
				'model'=>$this->loadModel($id),
				), false, true);
		}
		else
		{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id,$name)
	{
		$model=new FileLain;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FileLain']))
		{
			$model->attributes=$_POST['FileLain'];
			$model->tanggal_buat = date('Y-m-d h:i:s');
			$model->tanggal_update = date('Y-m-d h:i:s');
			$model->user_id = Yii::app()->user->id;
			$model->status = 1;
			$model->ail_id = $id;
			$model->deskripsi = Yii::app()->user->name . " telah upload dokumen lampiran ".ucfirst($name)." pada ".date('d-m-Y h:i:s');

			$model->file=CUploadedFile::getInstance($model,'file');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'file'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'file'); 
				$model->file=YII::app()->user->id."-File".ucfirst($name)."-".$this->loadAil($id).'.'.$tmp->extensionName; 
			}

			if($model->save()){

				if(strlen(trim($model->file)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/file/'.$name.'/'.$model->file);				
				}

				$this->redirect(array('ail/view','id'=>$model->ail_id));
			}
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FileLain']))
		{
			$model->attributes=$_POST['FileLain'];
			$model->file=CUploadedFile::getInstance($model,'file');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'file'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'file'); 
				$model->file=YII::app()->user->id."-File".ucfirst($namafile)."-".$this->loadAil($id).'.'.$tmp->extensionName; 
			}			
			if($model->save()){

				if(strlen(trim($model->file)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/file/'.$namafile.'/'.$model->file);				
				}

				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			));
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
		$dataProvider=new CActiveDataProvider('FileLain');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FileLain('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FileLain']))
			$model->attributes=$_GET['FileLain'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FileLain the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FileLain::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadAil($id)
	{
		$model=Ail::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model->kode_map;
	}	

	/**
	 * Performs the AJAX validation.
	 * @param FileLain $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='file-amplop-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionEnable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->save();
		$this->redirect(array('index'));
	}	

	public function actionDisable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 0;
		$model->save();
		$this->redirect(array('index'));
	}			
}
