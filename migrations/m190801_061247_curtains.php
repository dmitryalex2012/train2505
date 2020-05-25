<?php

use yii\db\Migration;

/**
 * Class m190801_061247_curtains
 */
class m190801_061247_curtains extends Migration
{
    public function safeUp()
    {
        $this->createTable('curtains', [
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
        $this->dropTable('curtains');
    }
}
