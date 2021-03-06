<?php

/**
 * This is the model class for table "rak".
 *
 * The followings are the available columns in table 'rak':
 * @property integer $id_rak
 * @property string $kode
 * @property string $deskripsi
 * @property integer $lemari_id
 * @property integer $status
 */
class Rak extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rak';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, deskripsi, lemari_id, status', 'required'),
			array('lemari_id, status', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>15),
			array('deskripsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rak, kode, deskripsi, lemari_id, status', 'safe', 'on'=>'search'),
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
			'id_rak' => 'Id Rak',
			'kode' => 'Kode',
			'deskripsi' => 'Deskripsi',
			'lemari_id' => 'Lemari',
			'status' => 'Status',
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

		$criteria->compare('id_rak',$this->id_rak);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('lemari_id',$this->lemari_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rak the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
