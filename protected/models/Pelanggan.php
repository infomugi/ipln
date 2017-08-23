<?php

/**
 * This is the model class for table "pelanggan".
 *
 * The followings are the available columns in table 'pelanggan':
 * @property integer $id_pelanggan
 * @property string $kode
 * @property string $nama
 * @property string $alamat
 * @property string $tarif
 * @property string $daya
 * @property double $rupiah_uil
 * @property integer $status
 */
class Pelanggan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelanggan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, nama, alamat, tarif, daya, rupiah_uil, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('rupiah_uil', 'numerical'),
			array('kode', 'length', 'max'=>50),
			array('nama', 'length', 'max'=>255),
			array('tarif', 'length', 'max'=>5),
			array('daya', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pelanggan, kode, nama, alamat, tarif, daya, rupiah_uil, status', 'safe', 'on'=>'search'),
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
			'id_pelanggan' => 'Id Pelanggan',
			'kode' => 'Kode',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'tarif' => 'Tarif',
			'daya' => 'Daya',
			'rupiah_uil' => 'Rupiah Uil',
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

		$criteria->compare('id_pelanggan',$this->id_pelanggan);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tarif',$this->tarif,true);
		$criteria->compare('daya',$this->daya,true);
		$criteria->compare('rupiah_uil',$this->rupiah_uil);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pelanggan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function data($data){
		if($data==1){
			return "450";
		}elseif($data==2){
			return "900";
		}elseif($data==3){
			return "1200";
		}elseif($data==4){
			return "2200";
		}
	}
}
