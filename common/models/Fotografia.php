<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fotografia".
 *
 * @property int $id
 * @property int $id_album
 * @property int $cover
 * @property string $img
 * @property string $descricao
 *
 * @property Album $album
 */
class Fotografia extends \yii\db\ActiveRecord
{
    
    // Conecta ku bases de dados de radio
   public static function getDb() {
       return Yii::$app->get('db2'); // second database
   }
   
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fotografia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_album', 'img'], 'required'],
            [['id_album'], 'integer'],
            [['img'], 'string', 'max' => 500],
            [['id_album'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['id_album' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_album' => 'Id Album',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Album::className(), ['id' => 'id_album']);
    }
}
