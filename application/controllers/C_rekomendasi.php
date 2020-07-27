<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_rekomendasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_perhitungan', 'ref');
        $this->load->model('m_kriteria', 'refKriteria');
    }

    public function index()
    {
        $data['titlepage'] = "Rekomendasi Coffee Shop";
        $data['page'] = "rekomendasi";
        $data['kriteriaList'] = $this->refKriteria->getAll();
        $this->load->view('template', $data);
    }
}
