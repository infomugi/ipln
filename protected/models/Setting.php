<?php

/**
 * This is the model class for table "setting".
 *
 * The followings are the available columns in table 'setting':
 * @property integer $id_setting
 * @property string $nama
 * @property string $deskripsi
 * @property string $visi
 * @property string $misi
 * @property string $alamat
 * @property string $website
 * @property string $theme
 * @property string $logo
 * @property string $favicon
 */
class Setting extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'setting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, deskripsi, visi, misi, alamat, website, theme', 'required'),
			array('nama, website, logo, favicon', 'length', 'max'=>100),
			array('theme', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_setting, nama, deskripsi, visi, misi, alamat, website, theme, logo, favicon', 'safe', 'on'=>'search'),
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
			'id_setting' => 'Id Setting',
			'nama' => 'Nama',
			'deskripsi' => 'Deskripsi',
			'visi' => 'Visi',
			'misi' => 'Misi',
			'alamat' => 'Alamat',
			'website' => 'Website',
			'theme' => 'Theme',
			'logo' => 'Logo',
			'favicon' => 'Favicon',
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

		$criteria->compare('id_setting',$this->id_setting);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('visi',$this->visi,true);
		$criteria->compare('misi',$this->misi,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('theme',$this->theme,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('favicon',$this->favicon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Setting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
