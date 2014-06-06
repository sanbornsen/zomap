<?php

class MetrosController extends Controller
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','get_list_by_city', 'get_gates', 'get_station_name', 'delete_exit', 'add_exit', 'update_exit'),
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
	public function actionCreate()
	{
		$model=new Metros;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Metros']))
		{
			$model->attributes=$_POST['Metros'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->metro_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


	/**
		* Get the list of metro stations of a city by using the city ID
	**/
	public function actionGet_list_by_city(){
		$response['error'] = 1;
		$response['msg'] = "";
		if(isset($_POST['city_id'])){
			if($_POST['city_id'] != 0 and $_POST['metro_id'] == 0)
				$metros = Metros::model()->findAll("city_id = ".trim($_POST['city_id']));
			else if($_POST['city_id'] != 0 and $_POST['metro_id'] != 0)
				$metros = Metros::model()->findAll("city_id = ".trim($_POST['city_id'])." AND metro_id = ".trim($_POST['metro_id']));
			else if($_POST['city_id'] == 0 and $_POST['metro_id'] != 0)
				$metros = Metros::model()->findAll("metro_id = ".trim($_POST['metro_id']));
			else
				$metros = Metros::model()->findAll();
			if($metros){
				foreach ($metros as $metro) {
					$d['lat'] = $metro->latitude;
					$d['lng'] = $metro->longitude;
					$d['address'] = $metro->source_id;
					$d['name'] = $metro->name;
					$d['id'] = $metro->metro_id;
					$data[] = $d;
				}
				$response['msg'] = $data;
				$response['error'] = 0;
			}
			else{
				$response['msg'] = "No metro found for this city.";
			}
		}
		else{
			$response['msg'] = "Please give a city ID.";
		}
		echo json_encode($response);
	}


	public function actionGet_gates(){
		$response['error'] = 1;
		$response['msg'] = "";
		$response['name'] = "";
		if(isset($_POST['metro_id']) or $_POST['metro_id']!=0){
			$gates = Metroexits::model()->findAll("metro_id=".$_POST['metro_id']);
			$station = Metros::model()->findByPk($_POST['metro_id']);
			if($station){
				$data = array();
				foreach ($gates as $gate) {
					$d['lat'] = $gate->latitude;
					$d['lng'] = $gate->longitude;
					$d['id'] = $gate->exit_id;
					$d['marker'] = "";
					$data[] = $d;
				}
				$response['msg'] = $data;
				$response['metro_name'] = $station->name;
				$response['error'] = 0;

			}
			else{
				$response['msg'] = "No gate has been added for this station, please add.";
			}
		}
		else{
			$response['msg'] = "Select a metro station!!";
		}
		echo json_encode($response);
	}


	public function actionGet_station_name(){
		$response['error'] = 1;
		$response['msg'] = "";
		if(isset($_POST['metro_id'])){
			$response['error'] = 0;
			$station = Metros::model()->findByPk($_POST['metro_id']);
			if($station){
				$response['msg'] = $station->name;
			}
			else{
				$response['msg'] = "No station found.";
			}
		}
		else{
			$response['msg'] = "No station id found.";
		}
		echo json_encode($response);
	}


	public function actionDelete_exit(){
		$response['error'] = 1;
		$response['msg'] = "";
		if(isset($_POST['exit_id'])){
			$exit = Metroexits::model()->findByPk($_POST['exit_id']);
			if($exit){
				$exit->delete();
				$response['error'] = 0;
				$response['msg'] = "All Okay!";
			}
			else{
				$response['msg'] = "Please enter a valid exit id.";
			}
		}
		else{
			$response['msg'] = "No exit id found !!";
		}
		echo json_encode($response);
	}


	public function actionAdd_exit(){
		$response['error'] = 1;
		$response['msg'] = "";
		if(isset($_POST['metro_id'])){
			$exit = new Metroexits;
			$exit->metro_id = $_POST['metro_id'];
			$exit->latitude = $_POST['lat'];
			$exit->longitude = $_POST['lng'];
			$exit->save(false);
			$response['error'] = 0;
			$response['msg'] = $exit->exit_id;
		}
		else{
			$response['msg'] = "Please give some input.";
		}
		echo json_encode($response);
	}


	public function actionUpdate_exit(){
		$response['error'] = 1;
		$response['msg'] = "";
		if(isset($_POST['exit_id'])){
			$exit = Metroexits::model()->findByPk($_POST['exit_id']);
			if($exit){
				$exit->latitude = $_POST['lat'];
				$exit->longitude = $_POST['lng'];
				$exit->save(false);
				$response['error'] = 0;
				$response['msg'] = "All Okay!!";
			}
			else{
				$response['msg'] = "Please give valid exit gate id.";
			}
		}
		else{
			$response['msg'] = "Please give some input.";
		}
		echo json_encode($response);
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

		if(isset($_POST['Metros']))
		{
			$model->attributes=$_POST['Metros'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->metro_id));
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
		$dataProvider=new CActiveDataProvider('Metros');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Metros('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Metros']))
			$model->attributes=$_GET['Metros'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Metros the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Metros::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Metros $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='metros-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
