<?php

class M_user extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('user');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function user_detail($id = null)
    {
        $query = $this->db->get_where('user', array('id' => $id))->row();
        return $query;
    }

    public function user_update($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}