<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataDiriAnak;

/**
 * DataDiriAnakSearch represents the model behind the search form about `app\models\DataDiriAnak`.
 */
class DataDiriAnakSearch extends DataDiriAnak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_data_diri_anak'], 'integer'],
            [['nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'pendidikan_sd', 'pendidikan_smp', 'pendidikan_sma', 'alamat', 'nama_ayah', 'tgl_lahir_ayah', 'nama_ibu', 'tgl_lahir_ibu', 'no_kontak', 'keterangan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DataDiriAnak::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_data_diri_anak' => $this->id_data_diri_anak,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tgl_lahir_ayah' => $this->tgl_lahir_ayah,
            'tgl_lahir_ibu' => $this->tgl_lahir_ibu,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'pendidikan_sd', $this->pendidikan_sd])
            ->andFilterWhere(['like', 'pendidikan_smp', $this->pendidikan_smp])
            ->andFilterWhere(['like', 'pendidikan_sma', $this->pendidikan_sma])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'no_kontak', $this->no_kontak])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
