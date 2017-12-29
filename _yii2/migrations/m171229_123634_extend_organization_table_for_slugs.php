<?php

use yii\db\Schema;
use yii\db\Migration;

class m171229_123634_extend_organization_table_for_slugs extends Migration
{
    public function up()
    {
      if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }
      $this->addColumn('{{%organization}}','slug',Schema::TYPE_STRING.' NOT NULL');

    }

    public function down()
    {
        $this->dropColumn('{{%organization}}','slug');
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
