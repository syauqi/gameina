<?php

class M_freegames extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('playgames');
    }

    public function free_games_detail($id_game = null)
    {
        $query = $this->db->get_where('playgames', array('id_game' => $id_game))->row();
        return $query;
    }

    public function free_games_update($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}