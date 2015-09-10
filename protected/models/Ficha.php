<?php

/**
 * This is the model class for table "ficha".
 *
 * The followings are the available columns in table 'ficha':
 * @property integer $idficha
 * @property string $nficha
 * @property integer $idarea
 * @property integer $idactividad
 * @property string $fecha
 * @property string $responsable
 * @property string $antiguedad
 * @property string $ip
 * @property string $mac
 * @property string $wireless
 * @property string $nomusuequi
 * @property string $nomusured
 *
 * The followings are the available model relations:
 * @property Direcciones[] $direcciones
 * @property Caracteristicas[] $caracteristicases
 * @property Departamento $idarea0
 * @property Actividad $idactividad0
 */
class Ficha extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ficha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nficha, idarea, idactividad, fecha, antiguedad, ip, mac, wireless', 'required'),
			array('idarea, idactividad', 'numerical', 'integerOnly'=>true),
			array('nficha', 'length', 'max'=>5),
			array('responsable', 'length', 'max'=>60),
			array('antiguedad', 'length', 'max'=>40),
			array('ip', 'length', 'max'=>15),
			array('mac, wireless, nomusuequi, nomusured', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idficha, nficha, idarea, idactividad, fecha, responsable, antiguedad, ip, mac, wireless, nomusuequi, nomusured', 'safe', 'on'=>'search'),
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
			'direcciones' => array(self::HAS_MANY, 'Direcciones', 'idficha'),
			'caracteristicases' => array(self::HAS_MANY, 'Caracteristicas', 'idficha'),
			'idarea0' => array(self::BELONGS_TO, 'Departamento', 'idarea'),
			'idactividad0' => array(self::BELONGS_TO, 'Actividad', 'idactividad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idficha' => 'Idficha',
			'nficha' => 'Nficha',
			'idarea' => 'Idarea',
			'idactividad' => 'Idactividad',
			'fecha' => 'Fecha',
			'responsable' => 'Responsable',
			'antiguedad' => 'Antiguedad',
			'ip' => 'Ip',
			'mac' => 'Mac',
			'wireless' => 'Wireless',
			'nomusuequi' => 'Nomusuequi',
			'nomusured' => 'Nomusured',
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

		$criteria->compare('idficha',$this->idficha);
		$criteria->compare('nficha',$this->nficha,true);
		$criteria->compare('idarea',$this->idarea);
		$criteria->compare('idactividad',$this->idactividad);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('antiguedad',$this->antiguedad,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('mac',$this->mac,true);
		$criteria->compare('wireless',$this->wireless,true);
		$criteria->compare('nomusuequi',$this->nomusuequi,true);
		$criteria->compare('nomusured',$this->nomusured,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ficha the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
