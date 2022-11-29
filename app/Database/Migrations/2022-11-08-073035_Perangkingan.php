<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perangkingan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_perangkingan'        => [
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
            'id_periode'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'nilai'      => [
				'type'           => 'DECIMAL',
				'constraint'     => 3,
			],
            'rangking'      => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_perangkingan', TRUE);

		// Membuat tabel news
		$this->forge->createTable('perangkingan', TRUE);
    }

    public function down()
    {
        //
    }
}
