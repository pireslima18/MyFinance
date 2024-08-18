<?php

use yii\db\Migration;

/**
 * Class m240723_222929_CADPESSOA
 */
class m240723_222929_CADPESSOA extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // $this->createTable('{{%cad_pessoa}}', [
        //     'id' => $this->primaryKey(),
        //     'nome' => $this->string()->notNull(),
        //     'senha' => $this->string(32)->notNull(),
        //     'telefone' => $this->string(),
        //     'email' => $this->string()->notNull()->unique(),
        //     'id_perfil' => $this->integer(),
        //     'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        //     'updated_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        // ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropTable('{{%cad_pessoa}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240723_222929_CADPESSOA cannot be reverted.\n";

        return false;
    }
    */
}
