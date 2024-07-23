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
            'id_pessoa' => $this->integer()->notnull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-renda-id_pessoa',
            'renda',
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
            'fk-renda-id_pessoa',
            'renda'
        );

        $this->dropTable('renda');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240723_223125_RENDA cannot be reverted.\n";

        return false;
    }
    */
}
