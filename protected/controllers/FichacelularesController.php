<?php

class FichacelularesController extends Controller
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
		$model=new Fichacelulares;
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Fichacelulares']))
		{
			$model->attributes=$_POST['Fichacelulares'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idfichacelular));
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

		if(isset($_POST['Fichacelulares']))
		{
			$model->attributes=$_POST['Fichacelulares'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idfichacelular));
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
            $model = new Bajacelulares;
            $row = Yii::app()->db->createCommand("select * from fichacelulares where idfichacelular=".$id)->queryRow();
            $model->idfichacelular = $row['idfichacelular'];
            $model->numero = $row['numero'];
            $model->duenio = $row['duenio'];
            $model->responsable = $row['responsable'];
            $model->simcard = $row['simcard'];
            $model->imei = $row['imei'];
            $model->marca = $row['marca'];
            $model->modelo = $row['modelo'];
            if($row['cargador'] ==1){
                $model->cargador = 'true';
            } else{
                $model->cargador = 'false';
            }
            
             if($row['auriculares'] ==1){
                $model->auriculares = 'true';
            } else{
                $model->auriculares = 'false';
            }
            
             if($row['caja'] ==1){
                $model->caja = 'true';
            } else{
                $model->caja = 'false';
            }
             if($row['microsd'] ==1){
                $model->microsd = 'true';
            } else{
                $model->microsd = 'false';
            }
            $model->cupo = $row['cupo'];
            
            $model->fechaini = $row['fechaini'];
            $model->fechafinal = $row['fechafinal'];
            $model->save();
            //$sql=Yii::app()->db->createCommand("insert into bajacelulares(idfichacelular,numero,duenio,responsable,simcard,imei,marca,modelo,cargador,microsd,auriculares,caja,cupo,fechaini,fechafinal) values(".$model->idfichacelular.",'".$model->numero."','".$model->duenio."','".$model->responsable."','".$model->simcard."','".$model->imei."','".$model->marca."','".$model->modelo."','".$model->cargador."','".$model->microsd."','".$model->auriculares."','".$model->caja."',".$model->cupo.",'".$model->fechaini."','".$model->fechafinal."'")->queryScalar(); 
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax'])){
                  
                   $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
                }                  
        }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Fichacelulares');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Fichacelulares('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Fichacelulares']))
			$model->attributes=$_GET['Fichacelulares'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Fichacelulares the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Fichacelulares::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Fichacelulares $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fichacelulares-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
