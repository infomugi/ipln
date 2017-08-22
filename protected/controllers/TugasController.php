<?php

class TugasController extends Controller
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
				'actions'=>array('admin','delete','create','update','index','view','mulai','selesai','my','mystart','myend'),
				'expression'=>'$user->getLevelAccess()==1',
				),
			array('allow', 
				'actions'=>array('my','view','mulai','selesai','mystart','myend','create','update'),
				'expression'=>'$user->getLevelAccess()==2',
				),	
			array('allow', 
				'actions'=>array('my','view','mulai','selesai','mystart','myend','create','update'),
				'expression'=>'$user->getLevelAccess()==3',
				),	
			array('allow', 
				'actions'=>array('my','view','mulai','selesai','mystart','myend'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Tugas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tugas']))
		{
			$model->attributes=$_POST['Tugas'];
			$model->event_id = $id;
			$model->status = 0;
			if($model->save())
				$this->redirect(array('event/view','id'=>$id));
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

		if(isset($_POST['Tugas']))
		{
			$model->attributes=$_POST['Tugas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tugas));
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
		$dataProvider=new CActiveDataProvider('Tugas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}


	public function actionMy()
	{
		$dataProvider=new CActiveDataProvider('Tugas',array(
			'criteria'=>array(
				'condition'=>'petugas_id='.YII::app()->user->id,
				'order'=>'id_tugas DESC',
				'limit'=>'4',
				),'pagination'=>array(
				'pageSize'=>'4'
				)));
		$this->render('my',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionMyStart()
	{
		$dataProvider=new CActiveDataProvider('Tugas',array(
			'criteria'=>array(
				'condition'=>'status=1 && petugas_id='.YII::app()->user->id,
				'order'=>'id_tugas DESC',
				'limit'=>'4',
				),'pagination'=>array(
				'pageSize'=>'4'
				)));
		$this->render('my',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionMyEnd()
	{
		$dataProvider=new CActiveDataProvider('Tugas',array(
			'criteria'=>array(
				'condition'=>'status=2 AND petugas_id='.YII::app()->user->id,
				'order'=>'id_tugas DESC',
				'limit'=>'4',
				),'pagination'=>array(
				'pageSize'=>'4'
				)));
		$this->render('my',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tugas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tugas']))
			$model->attributes=$_GET['Tugas'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tugas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tugas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tugas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tugas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionMulai($id)
	{
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->tanggal_mulai = date('Y-m-d');
		$model->save();
		Yii::app()->user->setFlash('Success', 'Tugas '.$model->Employee->nama.' dimulai.');
		$this->redirect(array('view','id'=>$model->id_tugas));
	}

	public function actionSelesai($id)
	{
		$model=$this->loadModel($id);
		$model->status = 2;
		$model->tanggal_selesai = date('Y-m-d');
		$event=Event::model()->findByPk($model->event_id);
		$event->persentase += $model->bobot;
		$event->save();
		$model->save();
		Yii::app()->user->setFlash('Success', 'Tugas '.$model->Employee->nama.' selesai.');
		$this->redirect(array('view','id'=>$model->id_tugas));
	}	

}
