<?php

class M_publisher extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('publisher');
    }

    public function publisher_detail($id_publisher = null)
    {
        $query = $this->db->get_where('publisher', array('id_publisher' => $id_publisher))->row();
        return $query;
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function publisher_update($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}