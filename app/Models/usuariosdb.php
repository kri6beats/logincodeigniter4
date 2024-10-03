<?php namespace App\Models;
 use CodeIgniter\Model;

 class usuariosdb extends Model{
    public function obtenerUsuarios($data){
    $userTable = $this->db->table('tUser');
    $userTable->where($data);
    return $userTable->get()->getResultArray();
   }
}