<?php

namespace app\models;

use Yii;
use common\models\User;

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
 * @property User $user
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
            [['created_at', 'updated_at', 'DataCompra'], 'safe'],
            [['descricao'], 'string', 'max' => 300],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_produto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::class, 'targetAttribute' => ['id_produto' => 'id']],
        ];
    }

    public function beforeSave($insert)
    {
	    return parent::beforeSave($insert);
    }

    public function afterFind() {
        if (!empty($this->DataCompra)) {
            $this->DataCompra = Yii::$app->formatter->asDate($this->DataCompra, 'php:d/m/Y');
        }
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
            'id_user' => 'Id User',
            'id_produto' => 'Loja',
            'DataCompra' => 'Data da Compra',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Pessoa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
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
