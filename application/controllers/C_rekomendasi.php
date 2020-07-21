<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_rekomendasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_perhitungan', 'ref');
    }

    public function index()
    {
        $data['titlepage'] = "Rekomendasi Coffee Shop";
        $data['page'] = "rekomendasi";
        $data['coffeeshopList'] = $this->ref->getRank();
        $this->load->view('template', $data);
    }
}
