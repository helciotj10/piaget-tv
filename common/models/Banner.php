<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $imagem
 * @property string|null $layer1
 * @property string|null $layer2
 * @property string|null $layer3
 * @property string|null $transicao
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $fotop;
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['marginLeft1', 'marginTop1', 'marginLeft2', 'marginTop2', 'marginLeft3', 'marginTop3'], 'integer'],
            [['titulo', 'link', 'imagem', 'layer1', 'layer2', 'layer3', 'transicao'], 'string', 'max' => 255],
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
            'fotop' => 'Imagem',
            'layer1' => 'Layer1',
            'layer2' => 'Layer2',
            'layer3' => 'Layer3',
            'marginLeft1' => 'Margem Esquerda (predifinido)%',
            'marginTop1' => 'Margem Topo (predifinido)%',
            'marginLeft2' => 'Margem Esquerda (predifinido)%',
            'marginTop2' => 'Margem Topo (predifinido)%',
            'marginLeft3' => 'Margem Esquerda (predifinido)%',
            'marginTop3' => 'Margem Topo (predifinido)%',        
            'transicao' => 'Transicao',
            'link' => 'link',
        ];
    }
}
