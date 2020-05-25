<?php

use yii\db\Migration;


class m190731_103540_news extends Migration
{

    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'title' => $this->string(),
            'content' => $this->text(),
            'deleted' => $this->integer(1),
            'deleted_at' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('news');
    }

}
