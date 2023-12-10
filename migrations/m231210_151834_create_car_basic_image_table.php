<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_basic_image}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%car_basic}}`
 * - `{{%file}}`
 */
class m231210_151834_create_car_basic_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_basic_image}}', [
            'id' => $this->primaryKey(),
            'car_basic_id' => $this->integer()->notNull(),
            'file_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `car_basic_id`
        $this->createIndex(
            '{{%idx-car_basic_image-car_basic_id}}',
            '{{%car_basic_image}}',
            'car_basic_id'
        );

        // add foreign key for table `{{%car_basic}}`
        $this->addForeignKey(
            '{{%fk-car_basic_image-car_basic_id}}',
            '{{%car_basic_image}}',
            'car_basic_id',
            '{{%car_basic}}',
            'id',
            'CASCADE'
        );

        // creates index for column `file_id`
        $this->createIndex(
            '{{%idx-car_basic_image-file_id}}',
            '{{%car_basic_image}}',
            'file_id'
        );

        // add foreign key for table `{{%file}}`
        $this->addForeignKey(
            '{{%fk-car_basic_image-file_id}}',
            '{{%car_basic_image}}',
            'file_id',
            '{{%file}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%car_basic}}`
        $this->dropForeignKey(
            '{{%fk-car_basic_image-car_basic_id}}',
            '{{%car_basic_image}}'
        );

        // drops index for column `car_basic_id`
        $this->dropIndex(
            '{{%idx-car_basic_image-car_basic_id}}',
            '{{%car_basic_image}}'
        );

        // drops foreign key for table `{{%file}}`
        $this->dropForeignKey(
            '{{%fk-car_basic_image-file_id}}',
            '{{%car_basic_image}}'
        );

        // drops index for column `file_id`
        $this->dropIndex(
            '{{%idx-car_basic_image-file_id}}',
            '{{%car_basic_image}}'
        );

        $this->dropTable('{{%car_basic_image}}');
    }
}
