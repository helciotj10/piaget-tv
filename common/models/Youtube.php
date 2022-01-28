<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "youtube".
 *
 * @property int $id
 * @property string $efeito
 * @property string $link
 * @property string|null $tipo
 */
class Youtube extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'youtube';
    }

    /**
     * {@inheritdoc}
     */
    public $fotop;
    public function rules()
    {
        return [
            [['efeito', 'link'], 'required'],
            [['efeito', 'link', 'tipo', 'foto'], 'string', 'max' => 255],
            [['programa_id', 'ordem'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'efeito' => 'Titulo',
            'link' => 'Link',
            'tipo' => 'Tipo',
            'foto' => 'Imagem',
            'programa_id' => 'Programa',
            'ordem' => 'Ordem'
        ];
    }
}
