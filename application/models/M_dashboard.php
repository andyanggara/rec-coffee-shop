<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    private $table = "admin";
    public $id;
    public $mark;
    public $title;
    public $description;
    public $link;
    public $updated_date;
    public $updated_by;

    public function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],

            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM $this->table")->result();
    }

    public function getSetting()
    {
        return $this->db->get_where($this->table, ["mark" => "home"])->row();
    }

    public function count()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }

    public function updateSetting()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->mark = $post["mark"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        if (!empty($_FILES["link"]["name"])) {
            var_dump('berhasil');
            $this->link = $this->_uploadImage();
        } else {
            $this->link = $post["old_images"];
        }
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'background-image';
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('link')) {
            return $this->upload->data("file_name");
        }
        return "dafault.jpg";
    }
}
