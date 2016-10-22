<?php

use yii\db\Migration;

class m160718_042239_create_setting extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('{{%setting}}', [
            'key' => $this->string()->notNull(),
            'section' => $this->string()->notNull(),
            'data' => $this->text(),
            'cache' => $this->boolean()->defaultValue(true),
        ]);

        $this->addPrimaryKey('pk_setting', '{{%setting}}', ['key', 'section']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%setting}}');
    }

}
