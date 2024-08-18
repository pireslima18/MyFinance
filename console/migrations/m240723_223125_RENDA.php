<?php

use yii\db\Migration;

/**
 * Class m240723_223125_RENDA
 */
class m240723_223125_RENDA extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%renda}}', [
            'id' => $this->primaryKey(),
            'valor' => $this->float(),
            'descricao' => $this->string(100),
            'id_user' => $this->integer()->notnull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-renda-id_user',
            'renda',
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
            'fk-renda-id_user',
            'renda'
        );

        $this->dropTable('renda');
    }
}
