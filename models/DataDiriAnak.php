<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_diri_anak".
 *
 * @property integer $id_data_diri_anak
 * @property string $nama_lengkap
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $pendidikan_sd
 * @property string $pendidikan_smp
 * @property string $pendidikan_sma
 * @property string $alamat
 * @property string $nama_ayah
 * @property string $tgl_lahir_ayah
 * @property string $nama_ibu
 * @property string $tgl_lahir_ibu
 * @property string $no_kontak
 * @property string $keterangan
 *
 * @property PerantaraAnak[] $perantaraAnaks
 * @property PrestasiAnak[] $prestasiAnaks
 * @property Request[] $requests
 */
class DataDiriAnak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_diri_anak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'nama_ayah', 'tgl_lahir_ayah', 'nama_ibu', 'tgl_lahir_ibu', 'no_kontak'], 'required'],
            [['jenis_kelamin', 'alamat', 'keterangan'], 'string'],
            [['tanggal_lahir', 'tgl_lahir_ayah', 'tgl_lahir_ibu'], 'safe'],
            [['nama_lengkap', 'pendidikan_sd', 'pendidikan_smp', 'pendidikan_sma', 'nama_ayah', 'nama_ibu'], 'string', 'max' => 75],
            [['tempat_lahir'], 'string', 'max' => 35],
            [['no_kontak'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_data_diri_anak' => 'Id Data Diri Anak',
            'nama_lengkap' => 'Nama Lengkap',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'pendidikan_sd' => 'Pendidikan Sd',
            'pendidikan_smp' => 'Pendidikan Smp',
            'pendidikan_sma' => 'Pendidikan Sma',
            'alamat' => 'Alamat',
            'nama_ayah' => 'Nama Ayah',
            'tgl_lahir_ayah' => 'Tgl Lahir Ayah',
            'nama_ibu' => 'Nama Ibu',
            'tgl_lahir_ibu' => 'Tgl Lahir Ibu',
            'no_kontak' => 'No Kontak',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerantaraAnaks()
    {
        return $this->hasMany(PerantaraAnak::className(), ['id_anak' => 'id_data_diri_anak']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestasiAnaks()
    {
        return $this->hasMany(PrestasiAnak::className(), ['id_anak' => 'id_data_diri_anak']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['id_anak' => 'id_data_diri_anak']);
    }
}
