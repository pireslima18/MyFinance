<?php

use yii\db\Migration;

/**
 * Class m241005_200216_ALTERTABLECOMPRA
 */
class m241005_200216_ALTERTABLECOMPRA extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('compra', 'id_produto', $this->integer()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('compra', 'id_produto', $this->integer()->notNull());
    }
}
