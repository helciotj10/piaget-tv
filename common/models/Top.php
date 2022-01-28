<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "top".
 *
 * @property int $id
 * @property string $imagem
 * @property string $musica
 * @property string $cantor
 * @property string $youtube
 * @property string $ordem
 * @property string|null $votos
 */
class Top extends \yii\db\ActiveRecord
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
        return 'top';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagem', 'musica', 'cantor', 'youtube', 'ordem', 'tipo'], 'required'],
            [['imagem', 'tipo', 'musica', 'cantor', 'youtube', 'ordem'], 'string', 'max' => 255],
            [['votos'], 'integer'],
            [['ordem'], 'unique'],
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
            'musica' => 'Musica',
            'cantor' => 'Cantor',
            'youtube' => 'Youtube',
            'ordem' => 'Ordem',
            'votos' => 'Votos',
            'tipo' => 'Efeito',
        ];
    }
}
