<?php

class HomeController extends Controller
{
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
		{
			return array(
				// array('allow',  // allow all users to perform 'index' and 'view' actions
				// 	'actions'=>array('index','view'),
				// 	'users'=>array('*'),
				// ),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'actions'=>array('index','view','create','update','ot','travel'),
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
		}

	public function actionIndex()
	{
		$this->layout='main';
		$this->render('index');

	}
	public function actionOt()
	{
		$this->layout=false;
		$this->render('ot');

	}
	public function actionTravel()
	{
		$this->layout=false;
		$this->render('travel');

	}


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
