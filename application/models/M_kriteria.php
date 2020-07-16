<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kriteria extends CI_Model
{
    private $table = "kriteria";
    private $opt_table = "kriteria_opt";
    public $id;
    public $name;
    public $value_weight;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'value_weight',
                'label' => 'Value Weight',
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
        $this->value_weight = $post["value_weight"];

        $optionBody = $post['option'];
        $this->db->insert($this->table, $this);
        $cr_id = $this->db->insert_id();

        foreach ($optionBody as $option) {
            $option = array('cr_id' => $cr_id, 'name' => $option['name'], 'value_weight' => $option['value_weight']);
            $this->db->insert($this->opt_table, $option);
        }
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
        $this->value_weight = $post["value_weight"];

        $this->db->update($this->table, $this, array('id' => $post['id']));

        $optionBody = $post['option'];

        foreach ($optionBody as $key) {
            $this->db->update($this->opt_table, $key, array('id' => $key['id']));
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    public function getOptionByID($cr_id)
    {
        $this->db->select('*');
        $this->db->from($this->opt_table);
        $this->db->where('cr_id', $cr_id);
        return $this->db->get()->result();
    }

    public function deleteOption($id)
    {
        return $this->db->delete($this->opt_table, array("id" => $id));
    }
}
