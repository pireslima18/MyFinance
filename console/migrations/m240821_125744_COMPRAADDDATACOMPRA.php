<?php

use yii\db\Migration;

/**
 * Class m240821_125744_COMPRAADDDATACOMPRA
 */
class m240821_125744_COMPRAADDDATACOMPRA extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('compra', 'DataCompra', $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP')->after('id_produto'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('compra', 'DataCompra');
    }
}
