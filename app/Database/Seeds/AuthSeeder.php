<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AuthSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'fullname'    => "I'm Admin",
				'email'    => 'admin@admin.com',
				'username' => 'administrator',
				'password' => password_hash('admin123', PASSWORD_BCRYPT),
				'role' => 1,
				'is_active' => 1,
				'activated_at' => Time::now(),
				'updated_at' => Time::now(),
				'deactivated_at' => null,
			]
		];
		$this->db->table('users')->insert($data);

		$data = [
			[
				'name' => 'administrator',
			], [
				'name' => 'user'
			]
		];
		$this->db->table('auth_roles')->insertBatch($data);
	}
}
