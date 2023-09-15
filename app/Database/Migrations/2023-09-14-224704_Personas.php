<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Personas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nombre' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'paterno' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'materno' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            
        ]);
        $this->forge->addKey('id_nombre', true);
        $this->forge->createTable('personas');
    }

    public function down()
    {
        $this->forge->dropTable('personas');
    }
}
