<?php

use yii\db\Migration;

/**
 * Class m240723_223458_COMPRA
 */
class m240723_223458_COMPRA extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%compra}}', [
            'id' => $this->primaryKey(),
            'valor' => $this->float()->notnull(),
            'descricao' => $this->string(300)->null()->defaultValue(null),
            'id_user' => $this->integer()->notnull(),
            'id_produto' => $this->integer()->notnull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-compra-id_user',
            'compra',
            'id_user',
            'user',
            'id'
        );

        $this->addForeignKey(
            'fk-compra-id_produto',
            'compra',
            'id_produto',
            'produto',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-compra-id_produto',
            'compra'
        );
        $this->dropForeignKey(
            'fk-compra-id_userr',
            'compra'
        );

        $this->dropTable('compra');
    }
}
