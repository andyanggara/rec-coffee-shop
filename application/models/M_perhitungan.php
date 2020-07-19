<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perhitungan extends CI_Model
{
    private $table = "perhitungan";
    private $coffee_table = "coffeeshop";
    public $id;
    public $admin_id;
    public $coffeeshop_id;
    public $review;

    public function rules()
    {
        return [
            [
                'field' => 'admin_id',
                'label' => 'Admin Name',
                'rules' => 'required'
            ],

            [
                'field' => 'coffeeshop_id',
                'label' => 'Coffee Shop Name',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM $this->table")->result();
    }

    public function getAllReview()
    {
        $this->db->select('p.id, a.id as admin_id, a.name as admin_name, c.id as coffeeshop_id, c.name as coffeeshop_name, p.review');
        $this->db->from('perhitungan as p');
        $this->db->join('admin as a', 'a.id = p.admin_id', 'left');
        $this->db->join('coffeeshop as c', 'c.id = p.coffeeshop_id', 'left');
        $this->db->order_by('p.id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function count()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->admin_id = $post["admin_id"];
        $this->coffeeshop_id = $post["coffeeshop_id"];
        $this->review = implode(',', $post["review"]);
        return $this->db->insert($this->table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->admin_id = $post["admin_id"];
        $this->coffeeshop_id = $post["coffeeshop_id"];
        $this->review = implode(',', $post["review"]);
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    public function calculateWP()
    {
        $post = $this->input->post();
        $this->vector = $post["vector"];
        foreach ($this->vector as $vindex => $v) {
            $update_data = array("vector_s" => $v['vector_s'], "vector_v" => $v['vector_v']);
            $condi = array("id" => $v['coffeeshop_id']);
            $this->db->where($condi);
            $this->db->update($this->coffee_table, $update_data);
        }
    }

    public function getRank()
    {
        $this->db->select('*');
        $this->db->from($this->coffee_table);
        $this->db->order_by('vector_v', 'desc');
        $this->db->order_by('name', 'asc');
        $this->db->limit(5, 0);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}
