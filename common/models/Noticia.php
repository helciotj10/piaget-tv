<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $conteudo
 * @property string|null $imagem
 * @property string|null $link
 * @property string|null $data
 */
class Noticia extends \yii\db\ActiveRecord
{
    public $fotop;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['tipo'], 'integer'],
            [['conteudo'], 'string'],
            [['fotop'], 'safe'],
            [['titulo', 'imagem', 'link', 'data'], 'string', 'max' => 255],
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
            'conteudo' => 'Conteudo',
            'imagem' => 'Imagem',
            'link' => 'Link',
            'data' => 'Data',
        ];
    }
}
