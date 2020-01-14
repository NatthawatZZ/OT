<?php

/**
 * This is the model class for table "table_member".
 *
 * The followings are the available columns in table 'table_member':
 * @property integer $mb_id
 * @property integer $psn_id
 * @property string $mb_title
 * @property string $mb_name
 * @property integer $mb_idcard
 * @property string $mb_mobile
 * @property string $mb_email
 * @property integer $pst_id
 * @property string $created_date
 * @property integer $created_by
 * @property string $update_date
 * @property integer $update_by
 * @property string $active
 *
 * The followings are the available model relations:
 * @property MasterPosition $pst
 * @property TablePersonnel $psn
 * @property TableOt[] $tableOts
 * @property TableTravel[] $tableTravels
 */
class TableMember extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'table_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('psn_id, pst_id, active , mb_idcard,mb_name ,mb_email ,mb_mobile,mb_password ', 'required'),
			array('psn_id, mb_idcard, pst_id, created_by, update_by', 'numerical', 'integerOnly'=>true),
			array('mb_title', 'length', 'max'=>18),
			array('mb_email', 'unique'), // ห้ามซ้ำ
			array('mb_mobile', 'unique'), // ห้ามซ้ำ
			array('mb_idcard', 'unique'), // ห้ามซ้ำ
			array('mb_name, mb_email, mb_password','length', 'max'=>255),
			array('mb_mobile', 'length', 'max'=>12),
			array('active', 'length', 'max'=>1),
			array('created_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mb_id, psn_id, mb_title, mb_name, mb_idcard, mb_mobile,mb_password, mb_email, pst_id, created_date, created_by, update_date, update_by, active', 'safe', 'on'=>'search'),
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
			'pst' => array(self::BELONGS_TO, 'MasterPosition', 'pst_id'),
			'psn' => array(self::BELONGS_TO, 'TablePersonnel', 'psn_id'),
			'tableOts' => array(self::HAS_MANY, 'TableOt', 'mb_id'),
			'tableTravels' => array(self::HAS_MANY, 'TableTravel', 'mb_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mb_id' => 'Mb',
			'psn_id' => 'รหัสพนักงาน',
			'mb_title' => 'คำนำหน้า',
			'mb_name' => 'ชื่อ - นามสกุล',
			'mb_idcard' => 'หมายเลขบัตรประชาชน	',
			'mb_mobile' => 'หมายเลขโทรศัพท์มือถือ	',
			'mb_password' => 'รหัสผ่าน',
			'mb_email' => 'อีเมลล์	',
			'pst_id' => 'ตำแหน่ง',
			'created_date' => 'วันที่สมัคร',
			'created_by' => 'คนที่สมัคร',
			'update_date' => 'Update Date',
			'update_by' => 'Update By',
			'active' => 'Active',
		);
	}
	public function beforeSave()
	{
			if($this->isNewRecord)
			{
					$this->created_date=new CDbExpression('NOW()');
					//$this->created_by=Yii::app()->table_member->mb_id;

			}else{
				$this->update_date=new CDbExpression('NOW()');
			//	$this->update_by=Yii::app()->table_member->mb_id;
			}
			return parent::beforeSave();
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

		$criteria->compare('mb_id',$this->mb_id);
		$criteria->compare('psn_id',$this->psn_id);
		$criteria->compare('mb_title',$this->mb_title,true);
		$criteria->compare('mb_name',$this->mb_name,true);
		$criteria->compare('mb_idcard',$this->mb_idcard);
		$criteria->compare('mb_mobile',$this->mb_mobile,true);
		$criteria->compare('mb_password',$this->mb_password,true);
		$criteria->compare('mb_email',$this->mb_email,true);
		$criteria->compare('pst_id',$this->pst_id);
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
	 * @return TableMember the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}



}
