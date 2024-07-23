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
            'id_pessoa' => $this->integer()->notnull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-categoria-id_pessoa',
            'categoria',
            'id_pessoa',
            'cad_pessoa',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-categoria-id_pessoa',
            'categoria'
        );

        $this->dropTable('categoria');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240723_223233_CATEGORIA cannot be reverted.\n";

        return false;
    }
    */
}
