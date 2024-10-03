<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('tUser');
    }

    public function down()
    {
        $this->forge->dropTable('tUser');
    }
}
