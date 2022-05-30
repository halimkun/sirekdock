<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigratePengajuan extends Migration
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
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_dokumen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'revisi'      => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'revisi_manual' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'tanggal'      => [
                'type' => 'DATE',
            ],
            'halaman'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'paragraf'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'rasional'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'validasi'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'created_at'   => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'   => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at'   => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengajuan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pengajuan', true);
    }
}
