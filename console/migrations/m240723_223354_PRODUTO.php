<?php

use yii\db\Migration;

/**
 * Class m240723_223354_PRODUTO
 */
class m240723_223354_PRODUTO extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%produto}}', [
            'id' => $this->primaryKey(),
            'descricao' => $this->string(100),
            'id_pessoa' => $this->integer()->notnull(),
            'id_categoria' => $this->integer()->notnull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-produto-id_pessoa',
            'produto',
            'id_pessoa',
            'cad_pessoa',
            'id'
        );

        $this->addForeignKey(
            'fk-produto-id_categoria',
            'produto',
            'id_categoria',
            'categoria',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-produto-id_categoria',
            'produto'
        );

        $this->dropTable('produto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240723_223354_PRODUTO cannot be reverted.\n";

        return false;
    }
    */
}
