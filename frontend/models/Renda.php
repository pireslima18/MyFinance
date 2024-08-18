<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "renda".
 *
 * @property int $id
 * @property float|null $valor
 * @property string|null $descricao
 * @property int $id_user
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CadPessoa $pessoa
 */
class Renda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'renda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor'], 'number'],
            [['id_user'], 'required'],
            [['id_user'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['descricao'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => CadPessoa::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'valor' => 'Valor',
            'descricao' => 'Descricao',
            'id_user' => 'Id Pessoa',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Pessoa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasOne(CadPessoa::class, ['id' => 'id_user']);
    }
}
