<?php

/**
 * This is the model class for table "caracteristicas".
 *
 * The followings are the available columns in table 'caracteristicas':
 * @property integer $idcaracteristica
 * @property integer $idficha
 * 
 * @property boolean $aplica
 * @property boolean $noaplica
 * @property integer $idmarca
 * @property string $modelo
 * @property string $nserie
 * @property integer $cantidad
 * @property string $tipo
 * @property string $caracteristica
 * @property integer $idelemento
 * The followings are the available model relations:
 * @property Ficha $idficha0
 * @property Marca $idmarca0
 * @property Elementos $idelemento0
 */
class Caracteristicas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caracteristicas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idficha,cantidad,idelemento', 'required'),
			array('idficha, idmarca, cantidad,idelemento', 'numerical', 'integerOnly'=>true),
			
			array('modelo, nserie, tipo', 'length', 'max'=>40),
			array('caracteristica', 'length', 'max'=>100),
			array('aplica, noaplica', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcaracteristica,marca,idelemento,elemento,ficha,idficha, aplica, noaplica, idmarca, modelo, nserie, cantidad, tipo, caracteristica', 'safe', 'on'=>'search'),
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
			'pkmarca' => array(self::BELONGS_TO, 'Marca', 'idmarca'),
                        'pkelemento' => array(self::BELONGS_TO, 'Elementos', 'idelemento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcaracteristica' => 'Idcaracteristica',
			't.idficha' => 'Número de ficha',
			
			'aplica' => 'Aplica',
			'noaplica' => 'No aplica',
			'idmarca' => 'Marca',
			'modelo' => 'Modelo',
			'nserie' => 'Número serie',
			'cantidad' => 'Cantidad',
			'tipo' => 'Tipo',
			'caracteristica' => 'Característica',
                        'idelemento' => 'Descripción de elemento',
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
        public $ficha,$marca,$elemento;
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idcaracteristica',$this->idcaracteristica);
		$criteria->compare('t.idficha',$this->idficha);
                $criteria->with = array('pkficha','pkmarca','pkelemento');
                $criteria->addSearchCondition('pkficha.idficha', $this->ficha,true);
		
		$criteria->compare('aplica',$this->aplica);
		$criteria->compare('noaplica',$this->noaplica);
		$criteria->compare('idmarca',$this->idmarca);
                
                $criteria->addSearchCondition('pkmarca.nommarca', $this->marca, true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('nserie',$this->nserie,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('tipo',$this->tipo,true);
                $criteria->compare('idelemento',$this->idmarca);
                
                $criteria->addSearchCondition('pkelemento.nomele', $this->elemento, true);
		$criteria->compare('caracteristica',$this->caracteristica,true);
                $session=new CHttpSession;
                            $session->open();

                            $session['reporte_fichas']=$criteria;  //Esto para guardar la criteria en la sesión actual para usarlo posteriormente.

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Caracteristicas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
