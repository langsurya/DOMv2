<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kalender extends Migration
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
			'agenda'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'date'       => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('kalender');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kalender');
	}
}
