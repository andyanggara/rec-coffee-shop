<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("login");
        }
        $this->load->model('m_dashboard', 'ref');
        $this->load->model('m_adminlist', 'refAdmin');
        $this->load->model('m_coffeeshop', 'refCoffeeshop');
        $this->load->model('m_kriteria', 'refKriteria');
        $this->load->model('m_perhitungan', 'refPerhitungan');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titlepage'] = "Dashboard";
        $data['page'] = "dashboard";
        $data['count'] = (object) ['adminlist' => $this->refAdmin->count(), 'coffeeshop' => 10, 'coffeeshop' => $this->refCoffeeshop->count(), 'kriteria' => $this->refKriteria->count(), 'perhitungan' => $this->refPerhitungan->count()];

        $this->load->view('admin/template', $data);
    }
}
