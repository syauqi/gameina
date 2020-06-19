<?php

class M_gamedata extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('game');
    }

    public function game_detail($id_game = null)
    {
        $query = $this->db->get_where('game', array('id_game' => $id_game))->row();
        return $query;
    }
    public function game_update($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function game_edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}