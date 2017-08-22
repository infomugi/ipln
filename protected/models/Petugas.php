<?php

/**
 * This is the model class for table "petugas".
 *
 * The followings are the available columns in table 'petugas':
 * @property integer $id_petugas
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $jabatan
 * @property integer $divisi
 * @property string $email
 * @property integer $level
 */
class Petugas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'petugas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, username, password, jabatan, divisi, email, level', 'required'),
			array('divisi, level', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>100),
			array('username', 'length', 'max'=>15),
			array('password', 'length', 'max'=>255),
			array('jabatan, email', 'length', 'max'=>50),
			array('username, email','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_petugas, nama, username, password, jabatan, divisi, email, level', 'safe', 'on'=>'search'),
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
			'Division' => array(self::BELONGS_TO, 'divisi', 'divisi'),
			'Job' => array(self::BELONGS_TO, 'jabatan', 'jabatan'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_petugas' => 'Kode Petugas',
			'nama' => 'Nama',
			'username' => 'Username',
			'password' => 'Password',
			'jabatan' => 'Jabatan',
			'divisi' => 'Divisi',
			'email' => 'Email',
			'level' => 'Level',
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

		$criteria->compare('id_petugas',$this->id_petugas);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('divisi',$this->divisi);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Petugas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function level($data){
		if($data==1){
			return "Superadmin";
		}elseif($data==2){
			return "Pimpinan";
		}elseif($data==3){
			return "Kepala Bagian";
		}elseif($data==4){
			return "Staff";	
		}		
	}

	public function status($data){
		if($data==1){
			return "Aktif";
		}else{
			return "Tidak Aktif";
		}
	}
}
