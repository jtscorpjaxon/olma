<?php

use yii\db\Migration;

class m212345_123456_olma extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->execute("CREATE TABLE `olmalar` (
  `id` int(11) NOT NULL,
  `rang` varchar(25) NOT NULL,
  `unib` int(11) NOT NULL,
  `uzilish` int(11) DEFAULT NULL,
  `holati` enum('Daraxtda','tushdi','chirigan') NOT NULL DEFAULT 'Daraxtda',
  `yeyilgani` decimal(3,2) NOT NULL,
  `sana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
    }

    public function safeDown()
    {


        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170726_151339_apple_table cannot be reverted.\n";

        return false;
    }
    */
}
