<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id
 * @property string|null $descricao
 * @property int $id_pessoa
 * @property int $id_categoria
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Categoria $categoria
 * @property Compra[] $compras
 * @property CadPessoa $pessoa
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pessoa', 'id_categoria'], 'required'],
            [['id_pessoa', 'id_categoria'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['descricao'], 'string', 'max' => 100],
            [['id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::class, 'targetAttribute' => ['id_categoria' => 'id']],
            [['id_pessoa'], 'exist', 'skipOnError' => true, 'targetClass' => CadPessoa::class, 'targetAttribute' => ['id_pessoa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'id_pessoa' => 'Id Pessoa',
            'id_categoria' => 'Id Categoria',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Categoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categoria::class, ['id' => 'id_categoria']);
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::class, ['id_produto' => 'id']);
    }

    /**
     * Gets query for [[Pessoa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasOne(CadPessoa::class, ['id' => 'id_pessoa']);
    }
}
