<?php

/**
 * This is the model class for table "bajacelulares".
 *
 * The followings are the available columns in table 'bajacelulares':
 * @property integer $idbajacelular
 * @property integer $idfichacelular
 * @property string $numero
 * @property string $duenio
 * @property string $responsable
 * @property string $simcard
 * @property string $imei
 * @property string $marca
 * @property string $modelo
 * @property boolean $cargador
 * @property boolean $microsd
 * @property boolean $auriculares
 * @property boolean $caja
 * @property integer $cupo
 * @property string $fechaini
 * @property string $fechafinal
 */
class Bajacelulares extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bajacelulares';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idfichacelular, numero, duenio, responsable, simcard, imei, marca, fechaini, fechafinal', 'required'),
			array('idfichacelular, cupo', 'numerical', 'integerOnly'=>true),
			array('numero', 'length', 'max'=>10),
			array('duenio', 'length', 'max'=>250),
			array('responsable, marca, modelo', 'length', 'max'=>50),
			array('simcard', 'length', 'max'=>25),
			array('imei', 'length', 'max'=>20),
			array('cargador, microsd, auriculares, caja', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbajacelular, idfichacelular, numero, duenio, responsable, simcard, imei, marca, modelo, cargador, microsd, auriculares, caja, cupo, fechaini, fechafinal', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbajacelular' => 'Idbajacelular',
			'idfichacelular' => 'Idfichacelular',
			'numero' => 'Numero',
			'duenio' => 'Duenio',
			'responsable' => 'Responsable',
			'simcard' => 'Simcard',
			'imei' => 'Imei',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'cargador' => 'Cargador',
			'microsd' => 'Microsd',
			'auriculares' => 'Auriculares',
			'caja' => 'Caja',
			'cupo' => 'Cupo',
			'fechaini' => 'Fechaini',
			'fechafinal' => 'Fechafinal',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idbajacelular',$this->idbajacelular);
		$criteria->compare('idfichacelular',$this->idfichacelular);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('duenio',$this->duenio,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('simcard',$this->simcard,true);
		$criteria->compare('imei',$this->imei,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('cargador',$this->cargador);
		$criteria->compare('microsd',$this->microsd);
		$criteria->compare('auriculares',$this->auriculares);
		$criteria->compare('caja',$this->caja);
		$criteria->compare('cupo',$this->cupo);
		$criteria->compare('fechaini',$this->fechaini,true);
		$criteria->compare('fechafinal',$this->fechafinal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bajacelulares the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
