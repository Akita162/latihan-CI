<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    public function simpanData($data = null)
    {
        $this->db->table('user')->insert($data);
    }
    public function cekData($where = null)
    {
        return $this->db->table('user')->getWhere($where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->table('user')->getWhere($where);
    }
    public function cekUserAccess($where = null)
    {
        $access = $this->db->table('access_menu')
            ->select('*')
            ->where($where)
            ->get();
        return $access;
    }
    public function getUserLimit()
    {
        $user = $this->db->table('user')
            ->select('*')
            ->limit(10, 0)
            ->get();
        return $user;
    }
}
