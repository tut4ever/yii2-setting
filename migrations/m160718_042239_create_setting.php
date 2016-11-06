<?php

use yii\db\Migration;

class m160718_042239_create_setting extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('{{%setting}}', [
            'key' => $this->string()->notNull(),
            'data' => $this->text(),
<<<<<<< HEAD
=======
            'cache' => $this->boolean()->defaultValue(true),
>>>>>>> e34bebc1faa9a699d49b4aa58abea5494f0af0ae
        ]);

        $this->addPrimaryKey('pk_setting', '{{%setting}}', ['key']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%setting}}');
    }
}
