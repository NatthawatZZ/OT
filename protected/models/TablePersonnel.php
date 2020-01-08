<?php

/**
 * This is the model class for table "table_personnel".
 *
 * The followings are the available columns in table 'table_personnel':
 * @property integer $psn_id
 * @property integer $psn_per_id
 * @property string $created_date
 * @property integer $created_by
 * @property string $update_date
 * @property integer $update_by
 * @property string $active
 *
 * The followings are the available model relations:
 * @property TableMember[] $tableMembers
 * @property TableOt[] $tableOts
 * @property TableTravel[] $tableTravels
 */
class TablePersonnel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'table_personnel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('psn_per_id, created_by, update_by', 'numerical', 'integerOnly'=>true),
			array('active', 'length', 'max'=>1),
			array('created_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('psn_id, psn_per_id, created_date, created_by, update_date, update_by, active', 'safe', 'on'=>'search'),
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
			'tableMembers' => array(self::HAS_MANY, 'TableMember', 'psn_id'),
			'tableOts' => array(self::HAS_MANY, 'TableOt', 'psn_id'),
			'tableTravels' => array(self::HAS_MANY, 'TableTravel', 'psn_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'psn_id' => 'Psn',
			'psn_per_id' => 'Psn Per',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'update_date' => 'Update Date',
			'update_by' => 'Update By',
			'active' => 'Active',
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

		$criteria->compare('psn_id',$this->psn_id);
		$criteria->compare('psn_per_id',$this->psn_per_id);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('active',$this->active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TablePersonnel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
