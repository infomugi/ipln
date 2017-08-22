<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property integer $id_event
 * @property string $tanggal
 * @property integer $divisi_id
 * @property integer $kategori_id
 * @property string $tanggal_mulai
 * @property string $tanggal_berakhir
 * @property string $nama_kegiatan
 * @property string $deskripsi
 * @property string $progress
 * @property string $hasil
 * @property integer $petugas_id
 * @property integer $status
 * @property string $prioritas
 * @property string $skala
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal, divisi_id, kategori_id, tanggal_mulai, tanggal_berakhir, nama_kegiatan, petugas_id, status', 'required'),
			array('divisi_id, kategori_id, petugas_id, persentase, target', 'numerical', 'integerOnly'=>true),
			array('nama_kegiatan, status, progress, deskripsi, hasil, prioritas, skala', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_event, tanggal, divisi_id, kategori_id, tanggal_mulai, tanggal_berakhir, nama_kegiatan, deskripsi, progress, hasil, petugas_id, status', 'safe', 'on'=>'search'),
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
			'Division' => array(self::BELONGS_TO, 'divisi', 'divisi_id'),
			'Category' => array(self::BELONGS_TO, 'kategori', 'kategori_id'),			
			'Employee' => array(self::BELONGS_TO, 'petugas', 'petugas_id'),			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_event' => 'Kode Event',
			'tanggal' => 'Tanggal',
			'divisi_id' => 'Divisi',
			'kategori_id' => 'Kategori',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_berakhir' => 'Tanggal Berakhir',
			'nama_kegiatan' => 'Nama Kegiatan',
			'deskripsi' => 'Deskripsi',
			'progress' => 'Progress',
			'hasil' => 'Hasil',
			'petugas_id' => 'Petugas',
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

		$criteria->compare('id_event',$this->id_event);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('divisi_id',$this->divisi_id);
		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_berakhir',$this->tanggal_berakhir,true);
		$criteria->compare('nama_kegiatan',$this->nama_kegiatan,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('progress',$this->progress,true);
		$criteria->compare('hasil',$this->hasil,true);
		$criteria->compare('petugas_id',$this->petugas_id);
		$criteria->compare('status',$this->status);
		$criteria->order = 'tanggal_mulai ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchData()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_event',$this->id_event);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('divisi_id',$this->divisi_id);
		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_berakhir',$this->tanggal_berakhir,true);
		$criteria->compare('nama_kegiatan',$this->nama_kegiatan,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('progress',$this->progress,true);
		$criteria->compare('hasil',$this->hasil,true);
		$criteria->compare('petugas_id',$this->petugas_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->tanggal_mulai = date('Y-m-d', strtotime($this->tanggal_mulai));
		$this->tanggal_berakhir = date('Y-m-d', strtotime($this->tanggal_berakhir));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tanggal_mulai = date('d-m-Y', strtotime($this->tanggal_mulai));
		$this->tanggal_berakhir = date('d-m-Y', strtotime($this->tanggal_berakhir));
		return TRUE;
	}	

	public function status($pesentase,$target){
		if($pesentase<$target){
			return "Belum Memenuhi Target";
		}elseif($pesentase=$target){
			return "Target Terpenuhi";
		}else{
			return "Melebihi Target";
		}
	}

	public static function divisi($id)
	{
		return Event::model()->count('divisi_id=:divisi_id',array(':divisi_id'=>$id));
	}     	

	public static function kategori($id)
	{
		return Event::model()->count('kategori_id=:kategori_id',array(':kategori_id'=>$id));
	}    	
}
