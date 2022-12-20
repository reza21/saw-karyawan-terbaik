<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KriteriaPeriode extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_kriteria_periode'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_kriteria'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
            'id_periode'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'deskripsi'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'Kriteria',
			],
			'bobot'      => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_kriteria_periode', TRUE);

		// Membuat tabel news
		$this->forge->createTable('kriteria_periode', TRUE);
    }

    public function down()
    {
        //
    }
}
