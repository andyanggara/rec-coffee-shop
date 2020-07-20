<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kriteria extends CI_Model
{
    private $table = "kriteria";
    private $opt_table = "kriteria_opt";
    private $perhitungan_table = "perhitungan";
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
        $this->type = $post["type"];

        $optionBody = $post['option'];
        $this->db->insert($this->table, $this);
        $cr_id = $this->db->insert_id();

        // $this->id = $cr_id;
        // $this->code = 'C' . $cr_id;

        // // Insert Criteria Code
        // $this->db->update($this->table, $this, array('id' => $cr_id));

        // Create Criteria Option
        foreach ($optionBody as $option) {
            $option = array('cr_id' => $cr_id, 'name' => $option['name'], 'value_weight' => $option['value_weight']);
            $this->db->insert($this->opt_table, $option);
        }

        // Insert Criteria Value to Existing Calculation
        $perhitungan = $this->db->query("SELECT * FROM $this->perhitungan_table")->result();
        foreach ($perhitungan as $index => $review) {
            $update_data = array("review" => $review->review . ',1');
            $condition = array("id" => $review->id);
            $this->db->where($condition);
            $this->db->update($this->perhitungan_table, $update_data);
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
        $this->code = $post["code"];
        $this->name = $post["name"];
        $this->value_weight = $post["value_weight"];
        $this->type = $post["type"];

        $this->db->update($this->table, $this, array('id' => $post['id']));

        $optionBody = $post['option'];

        foreach ($optionBody as $key) {
            $this->db->update($this->opt_table, $key, array('id' => $key['id']));
        }
    }

    public function delete($id)
    {
        // Get Id Index
        $kriteria = $this->db->query("SELECT id FROM $this->table")->result();
        $reviewIndex = '';
        foreach ($kriteria as $index => $value) {
            if ($value->id === $id) {
                $reviewIndex = $index;
            }
        }

        // Delete Criteria Value to Existing Calculation
        $perhitungan = $this->db->query("SELECT * FROM $this->perhitungan_table")->result();
        foreach ($perhitungan as $index => $review) {
            $reviewArr = explode(',', $review->review);
            array_splice($reviewArr, $reviewIndex, 1);
            $reviewArr = implode(',', $reviewArr);

            $update_data = array("review" => $reviewArr);
            $condition = array("id" => $review->id);
            $this->db->where($condition);
            $this->db->update($this->perhitungan_table, $update_data);
        }
        return $this->db->delete($this->table, array("id" => $id));
    }

    public function getAllOption()
    {
        return $this->db->query("SELECT * FROM $this->opt_table")->result();
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

    public function sumVW()
    {
        $this->db->select_sum('value_weight');
        $this->db->from($this->table);
        return $this->db->get()->row()->value_weight;
    }

    public function getValueWeight()
    {
        $this->db->select('code, value_weight');
        $this->db->from($this->table);
        return $this->db->get()->result();
    }
}
