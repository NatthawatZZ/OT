<?php

/**
 * This is the model class for table "work".
 *
 * The followings are the available columns in table 'work':
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $f_date
 * @property string $f_time
 * @property string $l_date
 * @property string $l_time
 * @property string $des
 * @property string $price
 */
class Work extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'work';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type, f_date, f_time, l_date, l_time, des, price', 'required'),
			array('name, type, price', 'length', 'max'=>255),
			array('f_time, l_time', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, type, f_date, f_time, l_date, l_time, des, price', 'safe', 'on'=>'search'),
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
			'name' => 'ชื่อ - นามสกุล',
			'type' => 'ขอเบิก',
			'f_date' => 'วันที่เริ่ม',
			'f_time' => 'เวลาเริ่ม',
			'l_date' => 'วันที่สิ้นสุด',
			'l_time' => 'เวลาที่สิ้นสุด',
			'des' => 'รายละเอียด',
			'price' => 'จำนวนเงิน',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('f_date',$this->f_date,true);
		$criteria->compare('f_time',$this->f_time,true);
		$criteria->compare('l_date',$this->l_date,true);
		$criteria->compare('l_time',$this->l_time,true);
		$criteria->compare('des',$this->des,true);
		$criteria->compare('price',$this->price,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Work the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
