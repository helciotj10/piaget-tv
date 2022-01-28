<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "publicidade".
 *
 * @property int $id
 * @property string $imagem
 * @property string|null $link
 * @property int|null $ordem
 */
class Publicidade extends \yii\db\ActiveRecord
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
        return 'publicidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagem'], 'required'],
            [['ordem'], 'integer'],
            [['imagem', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fotop' => 'Imagem',
            'link' => 'Link',
            'ordem' => 'Ordem',
        ];
    }
}
