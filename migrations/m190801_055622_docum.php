<?php

use yii\db\Migration;

class m190801_055622_docum extends Migration
{
    public function safeUp()
    {
        $this->createTable('docum', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'title' => $this->string(),
            'description' => $this->string(),
            'views' => $this->integer(),
            'likes' => $this->integer(),
            'deleted' => $this->integer(1),
            'deleted_at' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('docum');
    }
}
