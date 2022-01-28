<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "texto".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 */
class Texto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'texto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'descricao'], 'required'],
            [['titulo', 'descricao'], 'string', 'max' => 255],
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
            'descricao' => 'Descricao',
        ];
    }
}
