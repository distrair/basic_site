<?php

use yii\db\Migration;

/**
 * Class m230209_093618_add_table_portfolio
 */
class m230209_093618_add_table_portfolio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%portfolio}}', [
            'id' => $this->primaryKey(),
            'idUser' => $this->integer()->notNull(),
            'description' => $this->text()->notNull(),
            'skills' => $this->string(255)->notNull(),
            'photo' => $this->string(255),
            'knowledge' => $this->string(255)->notNull(),

        ]);
        $this->addForeignKey('fk-user', '{{%portfolio}}', 'idUser', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230209_093618_add_table_portfolio cannot be reverted.\n";
        $this->dropForeignKey('fk-user', '{{%portfolio}}');
        $this->dropTable('{{%portfolio}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230209_093618_add_table_portfolio cannot be reverted.\n";

        return false;
    }
    */
}
