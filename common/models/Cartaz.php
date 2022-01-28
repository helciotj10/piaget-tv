<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cartaz".
 *
 * @property int $id
 * @property string $imagem
 */
class Cartaz extends \yii\db\ActiveRecord
{

     // Conecta ku bases de dados de radio
   public static function getDb() {
       return Yii::$app->get('db2'); // second database
   }
   
    /**
     * {@inheritdoc}
     */
     public $fotop;
    public static function tableName()
    {
        return 'cartaz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagem'], 'required'],
            [['imagem'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagem' => 'Imagem',
        ];
    }
}
