<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kriteria extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("admin/c_login");
        }
        $this->load->model('m_kriteria', 'ref');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titlepage'] = "Daftar Kriteria";
        $data['page'] = "kriteria/kriteria";
        $data['kriteriaList'] = $this->ref->getAll();
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
            redirect('kriteria');
        }

        $data = $this->data;

        $data['titlepage'] = "Tambah Kriteria";
        $data['page'] = "kriteria/form-kriteria";
        $data['content'] = "Add";
        $this->load->view('admin/template', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('kriteria');

        $account = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($account->rules());

        if ($validation->run()) {
            $account->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            redirect('kriteria');
        }

        $data = $this->data;

        $data['account'] = $account->getById($id);
        $data['option'] = $this->ref->getOptionByID($id);
        if (!$data['account'] || !$data['option']) show_404();

        $data['titlepage'] = "Edit Kriteria";
        $data['page'] = "kriteria/form-kriteria";
        $data['content'] = "Edit";
        $this->load->view('admin/template', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        $option = $this->ref->getOptionByID($id);

        $deleted = count($option);

        foreach ($option as $value) {
            if ($this->ref->deleteOption($value->id)) {
                $deleted--;
            }
        }

        if ($this->ref->delete($id) && $deleted === 0) {
            redirect(site_url('kriteria'));
        }
    }
}
