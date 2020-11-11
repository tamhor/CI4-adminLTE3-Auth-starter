<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthTables extends Migration
{
	public function up()
	{
		/**
		 * Users Table
		 */
		$this->forge->addField([
			'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'fullname'         => ['type' => 'varchar', 'constraint' => 255],
			'email'            => ['type' => 'varchar', 'constraint' => 255],
			'username'         => ['type' => 'varchar', 'constraint' => 30],
			'password'  	   => ['type' => 'varchar', 'constraint' => 255],
			'reset_token'      => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			'role'	           => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
			'activate_token'   => ['type' => 'varchar', 'constraint' => 255],
			'is_active'        => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
			'created_at'       => ['type' => 'datetime', 'null' => true],
			'updated_at'       => ['type' => 'datetime', 'null' => true],
			'deactivate_at'    => ['type' => 'datetime', 'null' => true],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('email');
		$this->forge->addUniqueKey('username');
		$this->forge->createTable('users', true);

		/**
		 * Password Reset Table
		 */
		$this->forge->addField([
			'id'         => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'user_id'    => ['type' => 'int', 'constraint' => 11],
			'token'      => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			'created_at' => ['type' => 'datetime', 'null' => false],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('auth_reset_password');

		/**
		 * Activations Table
		 */
		$this->forge->addField([
			'id'         => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'user_id'    => ['type' => 'int', 'constraint' => 11],
			'token'      => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			'created_at' => ['type' => 'datetime', 'null' => false],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('auth_activations');

		/**
		 * Roles Table
		 */
		$this->forge->addField([
			'id'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'name'        => ['type' => 'varchar', 'constraint' => 255],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('auth_roles', true);

		/**
		 * Remember me Table
		 */
		// $this->forge->addField([
		// 	'id'          	=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
		// 	'token'			=> ['type' => 'varchar', 'constraint' => 255],
		// 	'user_id'		=> ['type' => 'int', 'constraint' => 11],
		// 	'expired'		=> ['type' => 'datetime', 'null' => false],
		// ]);
		// $this->forge->addKey('id', true);
		// $this->forge->createTable('auth_remember', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users', true);
		$this->forge->dropTable('auth_reset_password', true);
		$this->forge->dropTable('auth_activations', true);
		$this->forge->dropTable('auth_roles', true);
	}
}
