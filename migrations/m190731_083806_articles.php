<?php

use yii\db\Migration;

/**
 * Class m190731_083806_articles
 */
class m190731_083806_articles extends Migration
{
    public function safeUp()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'name' => $this->string(), //. ' NOT NULL',
            'title' => $this->string(), //. ' NOT NULL',
            'content' => $this->text(),
            'deleted' => $this->integer(1),
            'deleted_at' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('articles');
    }

}
