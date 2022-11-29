<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penilaian extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_penilaian'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_karyawan'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
            'id_kriteria_periode'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
			'nilai'      => [
				'type'           => 'DECIMAL',
				'constraint'     => 3,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_penilaian', TRUE);

		// Membuat tabel news
		$this->forge->createTable('penilaian', TRUE);
    }

    public function down()
    {
        //
    }
}
