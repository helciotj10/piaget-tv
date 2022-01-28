<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "indexitem".
 *
 * @property int $id
 * @property string $indexItemTitulo
 * @property string $indexItemConteudo
 * @property int|null $indexItemOrdem
 * @property int|null $indexItemEstado
 */
class Indexitem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indexitem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indexItemTitulo', 'indexItemConteudo'], 'required'],
            [['indexItemConteudo'], 'string'],
            [['indexItemOrdem', 'indexItemEstado'], 'integer'],
            [['indexItemTitulo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'indexItemTitulo' => 'Titulo',
            'indexItemConteudo' => 'Conteudo',
            'indexItemOrdem' => 'Posição',
            'indexItemEstado' => 'Estado',
        ];
    }
}
