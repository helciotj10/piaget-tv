<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "entrevistas".
 *
 * @property int $id
 * @property string $titulo
 * @property string $link
 * @property string $data
 */
class Entrevistas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrevistas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'link', 'data'], 'required'],
            [['titulo', 'link', 'data'], 'string', 'max' => 255],
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
            'link' => 'Link (Insira Apenas o codigo do youtube)',
            'data' => 'Data',
        ];
    }
}
