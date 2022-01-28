<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rubricas".
 *
 * @property int $id
 * @property string $tipo
 * @property string $titulo
 * @property string $youtube
 * @property string $data
 * @property string|null $texto
 * @property string|null $horario
 */
class Rubricas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rubricas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'titulo', 'youtube', 'data'], 'required'],
            [['texto'], 'string'],
            [['estado', 'posicao'], 'integer'],
            [['tipo', 'titulo', 'youtube', 'data', 'horario'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'titulo' => 'Titulo',
            'youtube' => 'Youtube (Insira apenas o codigo, não o link completo!)',
            'data' => 'Data',
            'texto' => 'Texto',
            'horario' => 'Horario',
            'estado' => 'Ficar em',
            'posicao' => 'Posicao (Automatico)'
        ];
    }
}
