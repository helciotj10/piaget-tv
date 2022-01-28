<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avancado".
 *
 * @property int $id
 * @property int|null $rubricasVerLancamentosAntigos
 * @property int|null $cartazLimiteDeSlide
 * @property int|null $indexId
 */
class Avancado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avancado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rubricasVerLancamentosAntigos', 'cartazLimiteDeSlide'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rubricasVerLancamentosAntigos' => 'Rubricas Ver Lancamentos Antigos',
            'cartazLimiteDeSlide' => 'Cartaz Limite De Slide',
            'indexId' => 'Index ID',
        ];
    }
}
