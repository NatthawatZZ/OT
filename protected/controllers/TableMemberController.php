<?php

class TableMemberController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
		);
	}


	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
/*	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}*/

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

	// public function actionIndex()
	// {
	// 	$model=new TableMember;
	// 	// Uncomment the following line if AJAX validation is needed
	// 	// $this->performAjaxValidation($model);
	// 	if(isset($_POST['TableMember']))
	// 	 {
	// 	  $model->attributes=$_POST['TableMember'];
	//
	// 		//if($model->save())
	// 			$model->save();
	// 		//$this->redirect(array('view','id'=>$model->mb_id));
	// 	}
	//
	// 	$position = MasterPosition::model()->findAll(array('order'=>'pst_id ASC'));
	// 	$this->render('index',array(
	// 		'model'=>$model,
	// 		'position'=>$position,
	// 	));
	// }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout = false;
		$model=new TableMember;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['TableMember']))
		 {
		  $model->attributes=$_POST['TableMember'];

			$ct_psn_id=$model->psn_id;
			$ct_mb_password=$model->mb_password;
			$ct_mb_title=$model->mb_title;
			$ct_mb_name=$model->mb_name;
			$ct_mb_idcard=$model->mb_idcard;
			$ct_mb_mobile=$model->mb_mobile;
			$ct_mb_email=$model->mb_email;
			$ct_pst_id=$model->pst_id;
			$ct_created_date=$model->created_date;
			$ct_created_by=$model->created_by;
			$ct_update_date=$model->update_date;
			$ct_update_by=$model->update_by;
			$ct_active=$model->active;

		}
		if($model->save()){
		// $this->redirect(array('view','id'=>$model->mb_id));
		Email::sendMail($ct_psn_id, $ct_mb_password, $ct_mb_title, $ct_mb_name, $ct_mb_idcard, $ct_mb_mobile, $ct_mb_email,$ct_pst_id,
			$ct_created_date, $ct_created_by, $ct_update_date, $ct_update_by, $ct_active);
		$this->redirect(array('site/login'));
}
		$position = MasterPosition::model()->findAll(array('order'=>'pst_id ASC'));
		$employ = TablePersonnel::model()->findAll(array('order'=>'psn_per_id ASC'));
		$this->render('signup',array(
			'model'=>$model,
			'position'=>$position,
			'employ' => $employ,
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

		if(isset($_POST['TableMember']))
		{
			$model->attributes=$_POST['TableMember'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->mb_id));
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
		$dataProvider=new CActiveDataProvider('TableMember');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TableMember('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TableMember']))
			$model->attributes=$_GET['TableMember'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TableMember the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TableMember::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TableMember $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='table-member-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
