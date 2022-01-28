<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "popup".
 *
 * @property int $id
 * @property string $titulo
 * @property string $imagem
 * @property string $estado
 */
class Popup extends \yii\db\ActiveRecord
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
        return 'popup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'imagem', 'estado'], 'required'],
            [['titulo', 'imagem', 'link', 'estado'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'imagem' => 'Imagem',
            'estado' => 'Estado',
        ];
    }
}
