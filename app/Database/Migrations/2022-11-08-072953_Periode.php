<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Periode extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_periode'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'tahun'      => [
				'type'           => 'YEAR',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_periode', TRUE);

		// Membuat tabel news
		$this->forge->createTable('periode', TRUE);
    }

    public function down()
    {
        //
    }
}
