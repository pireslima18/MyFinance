<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property int $id
 * @property string|null $descricao
 * @property int $id_pessoa
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CadPessoa $pessoa
 * @property Produto[] $produtos
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pessoa'], 'required'],
            [['id_pessoa'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['descricao'], 'string', 'max' => 100],
            [['id_pessoa'], 'exist', 'skipOnError' => true, 'targetClass' => CadPessoa::class, 'targetAttribute' => ['id_pessoa' => 'id']],
        ];
    }

    public function beforeSave($insert)
    {
        $this->id_pessoa = 1;
	    return parent::beforeSave($insert);
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
        return $this->hasOne(CadPessoa::class, ['id' => 'id_pessoa']);
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::class, ['id_categoria' => 'id']);
    }
}
