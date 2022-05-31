<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PetugasMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'token'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ], 'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'delete_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('petugas', true);
    }

    public function down()
    {
        $this->forge->dropTable('petugas', true);
    }
}
