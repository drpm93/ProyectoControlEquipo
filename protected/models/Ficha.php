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
 * @property string $ubicacion
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
                        array('ubicacion', 'length', 'max'=>100),
			array('ip', 'length', 'max'=>15),
			array('mac, wireless, nomusuequi, nomusured', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idficha, nficha, idarea, fecha1,idactividad, fecha, ubicacion,departamento,actividad,responsable, antiguedad, ip, mac, wireless, nomusuequi, nomusured', 'safe', 'on'=>'search'),
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
			'pkdepartamento' => array(self::BELONGS_TO, 'Departamento', 'idarea'),
			'pkactividad' => array(self::BELONGS_TO, 'Actividad', 'idactividad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idficha' => 'Idficha',
			'nficha' => 'Número de ficha',
			'idarea' => 'Departamento',
			'idactividad' => 'Actividad',
			'fecha' => 'Fecha de registro',
			'responsable' => 'Responsable del equipo',
			'antiguedad' => 'Antigüedad del equipo',
			'ip' => 'IP ADRESS',
			'mac' => 'MAC ADDRES',
			'wireless' => 'WIRELESS MAC',
			'nomusuequi' => 'NomBRE USUARIO EQUIPO',
			'nomusured' => 'NOMBRE USUARIO RED',
                        'ubicacion' => 'Ubicacíon del equipo',
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
        public $departamento;
        public $actividad;
        public $fecha1;
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idficha',$this->idficha);
		$criteria->compare('nficha',$this->nficha,true);
		$criteria->compare('idarea',$this->idarea);
                $criteria->with = array('pkdepartamento');
                $criteria->addSearchCondition('pkdepartamento.nomdepar', $this->departamento, true);
		$criteria->compare('idactividad',$this->idactividad);
                $criteria->with = array('pkactividad');
                $criteria->AddSearchCondition('pkactividad.nomactividad', $this->actividad, true);
		$criteria->compare('fecha',$this->fecha,true);
                //se puede buscar en un intervalo de fechas
                $criteria->addBetweenCondition('fecha', ''.$this->fecha1.'', ''.$this->fecha1.'');
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('antiguedad',$this->antiguedad,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('mac',$this->mac,true);
		$criteria->compare('wireless',$this->wireless,true);
		$criteria->compare('nomusuequi',$this->nomusuequi,true);
		$criteria->compare('nomusured',$this->nomusured,true);
                $criteria->compare('ubicacion',$this->ubicacion,true);
                //se guarda la busqueda en una sesion 
                $session=new CHttpSession;
                            $session->open();

                            $session['reporte_ficha']=$criteria;  //Esto para guardar la criteria en la sesión actual para usarlo posteriormente.


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
