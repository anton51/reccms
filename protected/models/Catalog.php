<?php

/**
 * This is the model class for table "{{catalog}}".
 *
 * The followings are the available columns in table '{{catalog}}':
 * @property string $id
 * @property integer $cat_id
 * @property string $articul
 * @property string $name
 * @property string $price
 * @property integer $price_old
 * @property string $info
 * @property string $info_full
 * @property string $photo
 * @property string $show
 */
class Catalog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('articul, name, price, price_old, info, info_full, photo, show', 'required'),
			array('cat_id, price_old', 'numerical', 'integerOnly'=>true),
			array('articul', 'length', 'max'=>26),
			array('price, photo', 'length', 'max'=>128),
			array('show', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cat_id, articul, name, price, price_old, info, info_full, photo, show', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'cat_id' => 'Cat',
			'articul' => 'Articul',
			'name' => 'Name',
			'price' => 'Price',
			'price_old' => 'Price Old',
			'info' => 'Info',
			'info_full' => 'Info Full',
			'photo' => 'Photo',
			'show' => 'Show',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('articul',$this->articul,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('price_old',$this->price_old);
		$criteria->compare('info',$this->info,true);
		$criteria->compare('info_full',$this->info_full,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('show',$this->show,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Catalog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
