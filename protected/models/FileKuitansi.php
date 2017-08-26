<?php

/**
 * This is the model class for table "file_amplop".
 *
 * The followings are the available columns in table 'file_amplop':
 * @property integer $id
 * @property string $tanggal_buat
 * @property string $tanggal_update
 * @property integer $user_id
 * @property string $file
 * @property string $deskripsi
 * @property integer $ail_id
 * @property integer $status
 */
class FileKuitansi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'file_kuitansi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_buat, tanggal_update, user_id, file, deskripsi, ail_id, status', 'required'),
			array('user_id, ail_id, status', 'numerical', 'integerOnly'=>true),
			array('file, deskripsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tanggal_buat, tanggal_update, user_id, file, deskripsi, ail_id, status', 'safe', 'on'=>'search'),
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
			'Ail' => array(self::BELONGS_TO,'Ail', 'ail_id'),
			'User' => array(self::BELONGS_TO,'User', 'user_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tanggal_buat' => 'Tanggal Buat',
			'tanggal_update' => 'Tanggal Update',
			'user_id' => 'User',
			'file' => 'File',
			'deskripsi' => 'Deskripsi',
			'ail_id' => 'Ail',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('tanggal_buat',$this->tanggal_buat,true);
		$criteria->compare('tanggal_update',$this->tanggal_update,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('ail_id',$this->ail_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FileAmplop the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
