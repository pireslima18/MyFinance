<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cad_pessoa".
 *
 * @property int $id
 * @property string $nome
 * @property string $senha
 * @property string|null $telefone
 * @property string $email
 * @property int|null $id_perfil
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Categoria[] $categorias
 * @property Compra[] $compras
 * @property Produto[] $produtos
 * @property Renda[] $rendas
 */
class CadPessoa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cad_pessoa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'senha', 'email'], 'required'],
            [['id_perfil'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nome', 'telefone', 'email'], 'string', 'max' => 255],
            [['senha'], 'string', 'max' => 32],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'senha' => 'Senha',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'id_perfil' => 'Id Perfil',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Categorias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategorias()
    {
        return $this->hasMany(Categoria::class, ['id_pessoa' => 'id']);
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::class, ['id_pessoa' => 'id']);
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::class, ['id_pessoa' => 'id']);
    }

    /**
     * Gets query for [[Rendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRendas()
    {
        return $this->hasMany(Renda::class, ['id_pessoa' => 'id']);
    }
}
