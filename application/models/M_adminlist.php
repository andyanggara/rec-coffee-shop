<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_adminlist extends CI_Model
{
    private $table = "admin";
    public $id;
    public $name;
    public $username;
    public $password;
    public $last_login;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
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
        $this->username = $post["username"];
        $this->password = sha1($post["password"]);
        $this->last_login = "";
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
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->last_login = $post["last_login"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
