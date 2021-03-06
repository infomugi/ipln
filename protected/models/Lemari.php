<?php

/**
 * This is the model class for table "lemari".
 *
 * The followings are the available columns in table 'lemari':
 * @property integer $id_lemari
 * @property string $kode
 * @property string $deskripsi
 * @property integer $tipe
 * @property integer $status
 */
class Lemari extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lemari';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, deskripsi, tipe, status, baris, kolom, maksimal', 'required'),
			array('status, tipe, baris, kolom, maksimal', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>25),
			array('deskripsi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_lemari, kode, deskripsi, status', 'safe', 'on'=>'search'),
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
			'id_lemari' => 'Id Lemari',
			'kode' => 'Kode Arsip Lemari',
			'deskripsi' => 'Keterangan',
			'tipe' => 'Tipe',
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

		$criteria->compare('id_lemari',$this->id_lemari);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lemari the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tipe($data){
		if($data==1){
			return "success";
		}else if($data==2){
			return "info";
		}else{
			return "danger";
		}
	}
}
