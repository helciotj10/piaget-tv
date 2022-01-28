<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "equipa".
 *
 * @property int $id
 * @property string $imagem
 * @property string $nome
 * @property string $nickname
 * @property string $funcao
 * @property string|null $descricao
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $email
 */
class Equipa extends \yii\db\ActiveRecord
{
    

    /**
     * {@inheritdoc}
     */
    public $img_file;
    public static function tableName()
    {
        return 'equipa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagem', 'nome', 'nickname', 'funcao'], 'required'],
            [['descricao'], 'string'],
            [['ordem'], 'integer'],
            [['img_file'], 'file', 'maxFiles' => 100],
            [['imagem', 'nome', 'nickname', 'funcao', 'facebook', 'instagram', 'email'], 'string', 'max' => 255],
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
            'nome' => 'Nome',
            'nickname' => 'Nickname',
            'funcao' => 'Funcao',
            'descricao' => 'Descricao',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'email' => 'Email',
            'img_file' => 'Foto (Recomendado 200x200)',
        ];
    }
}
