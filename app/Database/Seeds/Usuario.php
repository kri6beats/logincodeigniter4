<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $user= "admin";
        $password= password_hash("123", PASSWORD_DEFAULT);
        $type="admin";
        $data = [
            'user' => $user,
            'password' => $password,
            'type'=> $type
        ];

        // Simple Queries
        $this->db->query('INSERT INTO tUser (user, password, type) VALUES(:user:, :password:, :type:)', $data);

        // Using Query Builder
        $this->db->table('tUser')->insert($data);
    }
}
