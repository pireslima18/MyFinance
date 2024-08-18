<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compra".
 *
 * @property int $id
 * @property float $valor
 * @property string|null $descricao
 * @property int $id_user
 * @property int $id_produto
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CadPessoa $pessoa
 * @property Produto $produto
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor', 'id_user', 'id_produto'], 'required'],
            [['valor'], 'number'],
            [['id_user', 'id_produto'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['descricao'], 'string', 'max' => 300],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => CadPessoa::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_produto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::class, 'targetAttribute' => ['id_produto' => 'id']],
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
            'id_produto' => 'Produto',
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

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::class, ['id' => 'id_produto']);
    }
}
