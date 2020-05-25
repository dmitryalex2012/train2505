<?php

use yii\db\Migration;

/**
 * Class m190731_132643_products
 */
class m190731_132643_products extends Migration
{
    public function safeUp()
    {
        $this->createTable('products', [
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
        $this->dropTable('products');
    }
}
