<?php

/**
 * This is the model class for table "tugas".
 *
 * The followings are the available columns in table 'tugas':
 * @property integer $id_tugas
 * @property integer $event_id
 * @property integer $petugas_id
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property string $deskripsi
 * @property integer $status
 */
class Tugas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tugas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, petugas_id, tanggal_mulai, tanggal_selesai, status, bobot, deskripsi', 'required','on'=>'create'),
			// array('event_id, petugas_id, tanggal_mulai, tanggal_selesai, status, bobot, deskripsi', 'required','on'=>'update'),
			array('event_id, petugas_id, status, bobot', 'numerical', 'integerOnly'=>true),
			array('deskripsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tugas, event_id, petugas_id, tanggal_mulai, tanggal_selesai, status', 'safe', 'on'=>'search'),
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
			'Event' => array(self::BELONGS_TO, 'event', 'event_id'),	
			'Employee' => array(self::BELONGS_TO, 'petugas', 'petugas_id'),	
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tugas' => 'Id Tugas',
			'event_id' => 'Event',
			'petugas_id' => 'Petugas',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_selesai' => 'Tanggal Selesai',
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

		$criteria->compare('id_tugas',$this->id_tugas);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('petugas_id',$this->petugas_id);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_selesai',$this->tanggal_selesai,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tugas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->tanggal_mulai = date('Y-m-d', strtotime($this->tanggal_mulai));
		$this->tanggal_selesai = date('Y-m-d', strtotime($this->tanggal_selesai));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tanggal_mulai = date('d-m-Y', strtotime($this->tanggal_mulai));
		$this->tanggal_selesai = date('d-m-Y', strtotime($this->tanggal_selesai));
		return TRUE;
	}		

	public function status($data){
		if($data==1){
			return "Dalam Progress";
		}else if($data==2){
			return "Selesai";
		}else{
			return "Belum di Kerjakan";
		}
	}

	public function date($data){
		if($data=="01-01-1970"){
			return "-";
		}else{
			return $data;
		}
	}	

	public function warna($data){
		if($data==1){
			return "info";
		}else if($data==2){
			return "success";
		}else{
			return "warning";
		}
	}	
}
