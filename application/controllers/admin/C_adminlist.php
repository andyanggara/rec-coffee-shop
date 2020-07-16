<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_adminlist extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("admin/c_login");
        }
        $this->load->model('m_adminlist', 'ref');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titlepage'] = "Daftar Admin";
        $data['page'] = "adminlist/adminlist";
        $data['adminList'] = $this->ref->getAll();
        $this->load->view('admin/template', $data);
    }

    public function add()
    {
        $account = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($account->rules());

        if ($validation->run()) {
            $account->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            redirect('adminlist');
        }

        $data = $this->data;

        $data['titlepage'] = "Tambah Admin";
        $data['page'] = "adminlist/form-admin";
        $data['content'] = "Add";
        $this->load->view('admin/template', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('adminlist');

        $account = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($account->rules());

        if ($validation->run()) {
            $account->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            redirect('adminlist');
        }

        $data = $this->data;

        $data['account'] = $account->getById($id);
        if (!$data['account']) show_404();

        $data['titlepage'] = "Edit Admin";
        $data['page'] = "adminlist/form-admin";
        $data['content'] = "Edit";
        $this->load->view('admin/template', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('adminlist'));
        }
    }
}
