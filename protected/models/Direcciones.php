<?php

/**
 * This is the model class for table "direcciones".
 *
 * The followings are the available columns in table 'direcciones':
 * @property integer $iddireccion
 * @property integer $idacceso
 * @property boolean $messenger
 * @property boolean $googletalk
 * @property boolean $correo
 * @property string $adicional
 * @property integer $idficha
 * The followings are the available model relations:
 * @property Ficha $idficha0
 * @property Accesos $idacceso0
 */
class Direcciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direcciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idacceso, idficha', 'required'),
			array('idacceso, idficha', 'numerical', 'integerOnly'=>true),
			array('adicional', 'length', 'max'=>250),
                        array('messenger, googletalk, correo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iddireccion,ficha,idacceso, acceso,messenger, googletalk, correo, adicional, idficha', 'safe', 'on'=>'search'),
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
			'pkficha' => array(self::BELONGS_TO, 'Ficha', 'idficha'),
			'pkacceso' => array(self::BELONGS_TO, 'Accesos', 'idacceso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddireccion' => 'Iddireccion',
			'idacceso' => 'ACCESO',
			'messenger' => 'MESSENGER',
			'googletalk' => 'GOOGLETALK',
			'correo' => 'CORREO',
			'adicional' => 'ADICIONAL',
			'idficha' => 'NÚMERO DE FICHA',
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
        public $ficha,$acceso;
        
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('iddireccion',$this->iddireccion);
		$criteria->compare('idacceso',$this->idacceso);
                $criteria->with=array('pkacceso');
                $criteria->AddSearchCondition('pkacceso.nomacceso', $this->acceso, true);
		$criteria->compare('messenger',$this->messenger);
		$criteria->compare('googletalk',$this->googletalk);
		$criteria->compare('correo',$this->correo);
		$criteria->compare('adicional',$this->adicional,true);
		$criteria->compare('idficha',$this->idficha);
                $criteria->with = array('pkficha');
                $criteria->AddSearchCondition('pkficha.ip', $this->ficha, true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direcciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
