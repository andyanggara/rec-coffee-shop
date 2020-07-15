<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login', 'ref');
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    function validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $login = array(
                'username' => $username,
                'password' => sha1($password)
            );

            $array = $this->ref->check_login("admin", $login)->result();
            $check = $this->ref->check_login("admin", $login)->num_rows();

            if ($check > 0) {
                date_default_timezone_set("Asia/Jakarta");
                $date = date("Y-m-d H:i:s");

                $where = array(
                    'id' => $array[0]->id
                );

                $data = array(
                    'last_login' => $date
                );
                $this->ref->last_login("admin", $where, $data);

                $data_session = array(
                    'id' => $array[0]->id,
                    'name' => $array[0]->name,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);

                redirect('admin');
            } else {
                $error = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('admin/login', $error);
            }
        } else {
            $this->load->view('admin/login');
        }
    }

    function change_password()
    {
        $this->form_validation->set_rules('old_password', 'Old Password', 'required');
        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('retype_password', 'Re-type Password', 'required|matches[new_password]');
        if ($this->form_validation->run() == true) {
            $old_password = sha1($this->input->post('old_password'));
            $new_password = sha1($this->input->post('new_password'));

            $where = array(
                'id' => $this->session->userdata('id')
            );
            $change = array(
                'password' => $new_password
            );
            $check = $this->ref->check_id("admin", $old_password)->num_rows();
            if ($check > 0) {
                $this->ref->change_password("admin", $where, $change);
                $data = "The password has been successfully changed";
            } else {
                $data = "The old password you entered is incorrect";
            }
            echo json_encode($data);
        } else {
            $data = "New passwords are not the same";
            echo json_encode($data);
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
