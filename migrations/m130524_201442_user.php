<?php

use yii\db\Migration;

class m130524_201442_user extends Migration
{
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            'admin' => $this->boolean()->defaultValue(false)
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('user');
    }
}
