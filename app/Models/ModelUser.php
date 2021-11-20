<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'user';
    public function simpanData($data = null)
    {
        $this->db->table('user')->insert($data);
    }

    public function getUser($where = false)
    {
        if ($where == false) {
            return $this->findAll();
        }
        return $this->db->table('user')->getWhere($where);
    }

    public function cekUserAccess($where = null)
    {
        return $this->db->table('access_menu')->getWhere($where);
    }

    public function getUserLimit($limit = 10, $offset = 0)
    {
        return $this->findAll($limit, $offset);
    }
}
