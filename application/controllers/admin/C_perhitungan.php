<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_perhitungan extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("admin/c_login");
        }
        $this->load->model('m_perhitungan', 'ref');
        $this->load->model('m_adminlist', 'refAdmin');
        $this->load->model('m_coffeeshop', 'refCoffeeshop');
        $this->load->model('m_kriteria', 'refKriteria');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titlepage'] = "Perhitungan";
        $data['page'] = "perhitungan/perhitungan";
        $data['penilaianList'] = $this->ref->getAllReview();
        $data['kriteriaList'] = $this->refKriteria->getAll();
        $data['sumVW'] = $this->refKriteria->sumVW();
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
            redirect('perhitungan');
        }

        $data = $this->data;

        $data['titlepage'] = "Tambah Penilaian";
        $data['page'] = "perhitungan/form-perhitungan";
        $data['content'] = "Add";
        $data['adminList'] = $this->refAdmin->getAll();
        $data['coffeeshopList'] = $this->refCoffeeshop->getAll();
        $data['kriteriaList'] = $this->refKriteria->getAll();
        $data['kriteriaOption'] = $this->refKriteria->getAllOption();
        $this->load->view('admin/template', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('perhitungan');

        $account = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($account->rules());

        if ($validation->run()) {
            $account->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            redirect('perhitungan');
        }

        $data = $this->data;

        $data['account'] = $account->getById($id);
        if (!$data['account']) show_404();

        $data['titlepage'] = "Edit Penilaian";
        $data['page'] = "perhitungan/form-perhitungan";
        $data['content'] = "Edit";
        $data['adminList'] = $this->refAdmin->getAll();
        $data['coffeeshopList'] = $this->refCoffeeshop->getAll();
        $data['kriteriaList'] = $this->refKriteria->getAll();
        $data['kriteriaOption'] = $this->refKriteria->getAllOption();
        $this->load->view('admin/template', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('perhitungan'));
        }
    }

    public function calculateWP()
    {
        $data['titlepage'] = "Hasil Perhitungan WP";
        $data['page'] = "perhitungan/hasil-perhitungan";
        $data['ranking'] = $this->ref->getRank();
        $this->load->view('admin/template', $data);
    }
}
