<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "programacao".
 *
 * @property int $id
 * @property string $semana
 * @property string $hora
 * @property string $imagem
 * @property string $titulo
 * @property string|null $artista
 * @property string|null $texto
 */
class Programacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $fotop;
    public static function tableName()
    {
        return 'programacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semana', 'hora', 'imagem', 'titulo'], 'required'],
            [['texto'], 'string'],
            [['semana', 'hora', 'imagem', 'titulo', 'artista', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'semana' => 'Dia da Semana',
            'hora' => 'Hora',
            'imagem' => 'Imagem (Recomendado: 148x107)',
            'titulo' => 'Titulo',
            'artista' => 'Artista',
            'texto' => 'Texto',
            'link' => 'Link (Insira o link completo)',
        ];
    }
}
