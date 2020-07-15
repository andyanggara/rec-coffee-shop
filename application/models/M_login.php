<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function check_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function last_login($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function check_id($table, $old_password)
    {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id =', $id);
        $this->db->where('password =', $old_password);
        return $this->db->get();
    }

    function change_password($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
