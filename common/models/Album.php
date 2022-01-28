<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 *
 * @property Fotografia[] $fotografias
 */
class Album extends \yii\db\ActiveRecord
{

    // Conecta ku bases de dados de radio
   public static function getDb() {
       return Yii::$app->get('db2'); // second database
   }

    /**
     * @inheritdoc
     */

    public $img_file;
    public static function tableName()
    {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'descricao', 'data'], 'required'],
            [['descricao'], 'string'],
            [['tipo'], 'integer'],
            [['img_file'], 'file', 'maxFiles' => 100],
            [['titulo'], 'string', 'max' => 100],
            [['data'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descricao' => 'Descricao',
            'data' => 'Data',
            'data2' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotografias()
    {
        return $this->hasMany(Fotografia::className(), ['id_album' => 'id']);
    }

    public function getCapa()
    {
        return Fotografia::find()->where('id_album = '.$this->id.' ')->limit(1);
    }

    public function getData2()
    {
        $date = date_create($this->data);
        return date_format($date, 'd F Y');
    }
}
