<?php

class M_purchase extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('pembayaran');
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}