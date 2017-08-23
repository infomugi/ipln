<?php

/**
 * This is the model class for table "ail".
 *
 * The followings are the available columns in table 'ail':
 * @property integer $id_ail
 * @property string $tanggal_buat
 * @property string $tanggal_update
 * @property integer $petugas_id
 * @property integer $pelanggan_id
 * @property string $kode_rak
 * @property string $kode_map
 * @property integer $rayon_id
 * @property integer $lemari_id
 * @property integer $rak_id
 * @property integer $kolom_id
 * @property integer $baris_id
 * @property integer $kondisi_amplop
 * @property integer $kondisi_ail
 * @property integer $surat_surat_permohonan
 * @property integer $surat_identitas_pelanggan
 * @property integer $surat_data_survei
 * @property integer $surat_jawaban
 * @property integer $surat_perjanjian
 * @property integer $surat_pernyataan
 * @property integer $surat_kuitansi
 * @property integer $surat_perintah_kerja
 * @property integer $surat_bap
 * @property integer $surat_pdl
 * @property integer $surat_lainlain
 * @property string $deskripsi
 * @property integer $status
 */
class Ail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('tanggal_buat, tanggal_update, petugas_id, pelanggan_id, kode_rak, rayon_id, lemari_id, rak_id, kolom_id, baris_id, kondisi_amplop, kondisi_ail, surat_surat_permohonan, surat_identitas_pelanggan, surat_data_survei, surat_jawaban, surat_perjanjian, surat_pernyataan, surat_kuitansi, surat_perintah_kerja, surat_bap, surat_pdl, surat_lainlain', 'required'),
			array('tanggal_buat, tanggal_update, petugas_id, pelanggan_id, kode_rak, rayon_id, lemari_id, rak_id, kolom_id, baris_id', 'required'),
			array('petugas_id, pelanggan_id, rayon_id, lemari_id, kolom_id, baris_id, kondisi_amplop, kondisi_ail, surat_surat_permohonan, surat_identitas_pelanggan, surat_data_survei, surat_jawaban, surat_perjanjian, surat_pernyataan, surat_kuitansi, surat_perintah_kerja, surat_bap, surat_pdl, surat_lainlain, status, nomor_urut', 'numerical', 'integerOnly'=>true),
			array('kode_rak, kode_map', 'length', 'max'=>25),
			array('deskripsi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ail, tanggal_buat, tanggal_update, petugas_id, pelanggan_id, kode_rak, rayon_id, lemari_id, rak_id, kolom_id, baris_id, kondisi_amplop, kondisi_ail, surat_surat_permohonan, surat_identitas_pelanggan, surat_data_survei, surat_jawaban, surat_perjanjian, surat_pernyataan, surat_kuitansi, surat_perintah_kerja, surat_bap, surat_pdl, surat_lainlain, deskripsi, status', 'safe', 'on'=>'search'),
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
			'Pelanggan'=>array(self::BELONGS_TO,'Pelanggan','pelanggan_id'),
			'Petugas'=>array(self::BELONGS_TO,'Petugas','petugas_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ail' => 'Id Ail',
			'tanggal_buat' => 'Tanggal Buat',
			'tanggal_update' => 'Tanggal Update',
			'petugas_id' => 'Petugas',
			'pelanggan_id' => 'Pelanggan',
			'kode_rak' => 'Kode Rak',
			'rayon_id' => 'Rayon',
			'lemari_id' => 'Lemari',
			'rak_id' => 'Rak',
			'kolom_id' => 'Kolom',
			'baris_id' => 'Baris',
			'kondisi_amplop' => 'Kondisi Amplop',
			'kondisi_ail' => 'Kondisi Ail',
			'surat_surat_permohonan' => 'Surat Surat Permohonan',
			'surat_identitas_pelanggan' => 'Surat Identitas Pelanggan',
			'surat_data_survei' => 'Surat Data Survei',
			'surat_jawaban' => 'Surat Jawaban',
			'surat_perjanjian' => 'Surat Perjanjian',
			'surat_pernyataan' => 'Surat Pernyataan',
			'surat_kuitansi' => 'Surat Kuitansi',
			'surat_perintah_kerja' => 'Surat Perintah Kerja',
			'surat_bap' => 'Surat Bap',
			'surat_pdl' => 'Surat Pdl',
			'surat_lainlain' => 'Surat Lainlain',
			'deskripsi' => 'Keterangan',
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

		$criteria->compare('id_ail',$this->id_ail);
		$criteria->compare('tanggal_buat',$this->tanggal_buat,true);
		$criteria->compare('tanggal_update',$this->tanggal_update,true);
		$criteria->compare('petugas_id',$this->petugas_id);
		$criteria->compare('pelanggan_id',$this->pelanggan_id);
		$criteria->compare('kode_rak',$this->kode_rak,true);
		$criteria->compare('rayon_id',$this->rayon_id);
		$criteria->compare('lemari_id',$this->lemari_id);
		$criteria->compare('rak_id',$this->rak_id);
		$criteria->compare('kolom_id',$this->kolom_id);
		$criteria->compare('baris_id',$this->baris_id);
		$criteria->compare('kondisi_amplop',$this->kondisi_amplop);
		$criteria->compare('kondisi_ail',$this->kondisi_ail);
		$criteria->compare('surat_surat_permohonan',$this->surat_surat_permohonan);
		$criteria->compare('surat_identitas_pelanggan',$this->surat_identitas_pelanggan);
		$criteria->compare('surat_data_survei',$this->surat_data_survei);
		$criteria->compare('surat_jawaban',$this->surat_jawaban);
		$criteria->compare('surat_perjanjian',$this->surat_perjanjian);
		$criteria->compare('surat_pernyataan',$this->surat_pernyataan);
		$criteria->compare('surat_kuitansi',$this->surat_kuitansi);
		$criteria->compare('surat_perintah_kerja',$this->surat_perintah_kerja);
		$criteria->compare('surat_bap',$this->surat_bap);
		$criteria->compare('surat_pdl',$this->surat_pdl);
		$criteria->compare('surat_lainlain',$this->surat_lainlain);
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
	 * @return Ail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function status($data){
		if($data==1){
			return "Ada";
		}else{
			return "Tidak Ada";
		}
	}
}
