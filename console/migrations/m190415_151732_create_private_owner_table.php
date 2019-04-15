<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%private_owner}}`.
 */
class m190415_151732_create_private_owner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%private_owner}}', [
            'id' => $this->primaryKey(),
            'owner_no'=> $this->string(5),
            'first_name'=> $this->string(300),
            'last_name'=> $this->string(300),
            'address'=> $this->text(),
            'telephone'=> $this->integer(),
            'user_id'=> $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%private_owner}}');
    }
}
