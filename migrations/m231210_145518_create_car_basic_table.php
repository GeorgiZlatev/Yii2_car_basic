<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_basic}}`.
 */
class m231210_145518_create_car_basic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_basic}}', [
            'id' => $this->primaryKey(),
            'type_auto' => $this->string()->notNull(),
            'brand' => $this->string()->notNull(),
            'model' => $this->string()->notNull(),
            'year_car' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'start_date' => $this->integer()->notNull(),
            'end_date' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car_basic}}');
    }
}
