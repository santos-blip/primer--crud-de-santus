<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peliculas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
             'type'=>'int',
            'constraint'=> '10',
            'unsigned'=> true,
            'auto_increment'=> true
            ], 
            'titulo'=>[
                'type'=>'varchar',
               'constraint'=> 225
               ], 
               'description'=>[
                'type'=>'text',
               'null'=> true
               ], 
        ]);
        $this->forge->addkey('id',true);
        $this->forge->createTable('peliculas');
    }

    public function down()
    {
        $this->forge->dropTable('peliculas');
    }
}
