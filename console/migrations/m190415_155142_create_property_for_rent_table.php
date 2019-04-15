<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_for_rent}}`.
 */
class m190415_155142_create_property_for_rent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_for_rent}}', [
            'id' => $this->primaryKey(),
            'property_no'=> $this->string(5),
            'type'=> $this->string(50),
            'rooms'=> $this->integer(5),
            'rent'=> $this->float(7,2),
            'private_owner_id'=> $this->integer(),
            'staff_id'=> $this->integer(),
            'branch_id'=> $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_for_rent}}');
    }
}
