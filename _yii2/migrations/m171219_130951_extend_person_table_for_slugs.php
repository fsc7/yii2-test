<?php

use yii\db\Schema;
use yii\db\Migration;

class m171219_130951_extend_person_table_for_slugs extends Migration
{
    public function up()
    {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }
      $this->addColumn('{{%person}}','slug',Schema::TYPE_STRING.' NOT NULL');
    }

    public function down()
    {
      $this->dropColumn('{{%person}}','slug');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
