<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kriteria extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_kriteria'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_kriteria'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
				'default'        => 'Kriteria',
			],
			'tipe'      => [
				'type'           => 'ENUM',
				'constraint'     => ['b', 'c', 'n'],
				'default'        => 'n',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_kriteria', TRUE);

		// Membuat tabel news
		$this->forge->createTable('kriteria', TRUE);
    }

    public function down()
    {
        //
    }
}
