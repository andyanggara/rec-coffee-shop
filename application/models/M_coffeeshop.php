<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_coffeeshop extends CI_Model
{
    private $table = "coffeeshop";
    public $id;
    public $name;
    public $address;
    public $flat_rate;
    public $photo;
    public $vector_s;
    public $vector_v;
    public $open_in;
    public $close_in;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'address',
                'label' => 'Address',
                'rules' => 'required'
            ],

            [
                'field' => 'flat_rate',
                'label' => 'Flat Rate',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM $this->table")->result();
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
        $this->name = $post["name"];
        $this->address = $post["address"];
        $this->flat_rate = $post["flat_rate"];
        $this->photo = $post["photo"];
        $this->vector_s = $post["vector_s"];
        $this->vector_v = $post["vector_v"];
        $this->open_in = $post["open_in"];
        $this->close_in = $post["close_in"];

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
        $this->name = $post["name"];
        $this->address = $post["address"];
        $this->flat_rate = $post["flat_rate"];
        $this->photo = $post["photo"];
        $this->vector_s = $post["vector_s"];
        $this->vector_v = $post["vector_v"];
        $this->open_in = $post["open_in"];
        $this->close_in = $post["close_in"];

        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    public function search($searchValue)
    {
        return $this->db->query("SELECT * FROM $this->table WHERE lower(name) like lower('%$searchValue%')")->result();
    }
}
