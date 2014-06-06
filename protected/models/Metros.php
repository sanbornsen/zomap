<?php

/**
 * This is the model class for table "metros".
 *
 * The followings are the available columns in table 'metros':
 * @property integer $metro_id
 * @property integer $group_id
 * @property string $source_id
 * @property string $source
 * @property string $name
 * @property string $direction
 * @property string $radius
 * @property string $exit_dir
 * @property string $metro_line
 * @property integer $city_id
 * @property string $real_city
 * @property string $latitude
 * @property string $longitude
 * @property integer $status
 * @property string $date_added
 * @property string $metro_line_1
 * @property string $metro_line_2
 * @property string $metro_line_3
 * @property string $metro_line_4
 * @property string $metro_line_5
 * @property string $metro_line_1_class
 * @property string $metro_line_2_class
 * @property string $metro_line_3_class
 * @property string $metro_line_4_class
 * @property string $metro_line_5_class
 */
class Metros extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'metros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, source_id, source, name, direction, radius, metro_line, city_id, real_city, latitude, longitude, status, date_added, metro_line_1, metro_line_2, metro_line_3, metro_line_4, metro_line_5, metro_line_1_class, metro_line_2_class, metro_line_3_class, metro_line_4_class, metro_line_5_class', 'required'),
			array('group_id, city_id, status', 'numerical', 'integerOnly'=>true),
			array('source_id, name, metro_line', 'length', 'max'=>255),
			array('source, real_city', 'length', 'max'=>20),
			array('direction, radius, exit_dir', 'length', 'max'=>2),
			array('latitude, longitude', 'length', 'max'=>14),
			array('metro_line_1, metro_line_2, metro_line_3, metro_line_4, metro_line_5, metro_line_1_class, metro_line_2_class, metro_line_3_class, metro_line_4_class, metro_line_5_class', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('metro_id, group_id, source_id, source, name, direction, radius, exit_dir, metro_line, city_id, real_city, latitude, longitude, status, date_added, metro_line_1, metro_line_2, metro_line_3, metro_line_4, metro_line_5, metro_line_1_class, metro_line_2_class, metro_line_3_class, metro_line_4_class, metro_line_5_class', 'safe', 'on'=>'search'),
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
			'metro_id' => 'Metro',
			'group_id' => 'Group',
			'source_id' => 'Source',
			'source' => 'Source',
			'name' => 'Name',
			'direction' => 'Direction',
			'radius' => 'Radius',
			'exit_dir' => 'Exit Dir',
			'metro_line' => 'Metro Line',
			'city_id' => 'City',
			'real_city' => 'Real City',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'status' => 'Status',
			'date_added' => 'Date Added',
			'metro_line_1' => 'Metro Line 1',
			'metro_line_2' => 'Metro Line 2',
			'metro_line_3' => 'Metro Line 3',
			'metro_line_4' => 'Metro Line 4',
			'metro_line_5' => 'Metro Line 5',
			'metro_line_1_class' => 'Metro Line 1 Class',
			'metro_line_2_class' => 'Metro Line 2 Class',
			'metro_line_3_class' => 'Metro Line 3 Class',
			'metro_line_4_class' => 'Metro Line 4 Class',
			'metro_line_5_class' => 'Metro Line 5 Class',
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

		$criteria->compare('metro_id',$this->metro_id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('source_id',$this->source_id,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('direction',$this->direction,true);
		$criteria->compare('radius',$this->radius,true);
		$criteria->compare('exit_dir',$this->exit_dir,true);
		$criteria->compare('metro_line',$this->metro_line,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('real_city',$this->real_city,true);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('metro_line_1',$this->metro_line_1,true);
		$criteria->compare('metro_line_2',$this->metro_line_2,true);
		$criteria->compare('metro_line_3',$this->metro_line_3,true);
		$criteria->compare('metro_line_4',$this->metro_line_4,true);
		$criteria->compare('metro_line_5',$this->metro_line_5,true);
		$criteria->compare('metro_line_1_class',$this->metro_line_1_class,true);
		$criteria->compare('metro_line_2_class',$this->metro_line_2_class,true);
		$criteria->compare('metro_line_3_class',$this->metro_line_3_class,true);
		$criteria->compare('metro_line_4_class',$this->metro_line_4_class,true);
		$criteria->compare('metro_line_5_class',$this->metro_line_5_class,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Metros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
