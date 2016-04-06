<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m160404_135257_createArticle extends Migration
{
    public function up()
    {
        $this->createTable('article',[
            'aid'=>Schema::TYPE_PK,
            'node_id'=>Schema::TYPE_INTEGER,
            'title'=>Schema::TYPE_STRING,
            'content'=>Schema::TYPE_TEXT,
            'author'=>Schema::TYPE_INTEGER,
            'acreateTime'=>Schema::TYPE_TIMESTAMP,
            'aupdTime'=>Schema::TYPE_TIMESTAMP,
        ]);
    }

    public function down()
    {
        $this->dropTable('article');

        return false;
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
