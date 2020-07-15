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
        // return $this->db->insert($this->table, $this);

        var_dump($this);
        die();
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
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
