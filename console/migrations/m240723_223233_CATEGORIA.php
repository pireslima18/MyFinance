<?php

use yii\db\Migration;

/**
 * Class m240723_223233_CATEGORIA
 */
class m240723_223233_CATEGORIA extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categoria}}', [
            'id' => $this->primaryKey(),
            'descricao' => $this->string(100),
            'id_user' => $this->integer()->notnull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-categoria-id_user',
            'categoria',
            'id_user',
            'user',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-categoria-id_user',
            'categoria'
        );

        $this->dropTable('categoria');
    }
}
