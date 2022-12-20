<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_karyawan'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nip'       => [
				'type'           => 'CHAR',
				'constraint'     => '6'
			],
			'nama'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'default'        => 'John Doe',
			],
			'jns_kel'      => [
				'type'           => 'ENUM',
				'constraint'     => ['L', 'P', 'N'],
				'default'        => 'N',
			],
			'no_hp'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 14,
			],
			'alamat'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'        => 'Alamat',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_karyawan', TRUE);

		// Membuat tabel news
		$this->forge->createTable('karyawan', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('karyawan');
	}
}
