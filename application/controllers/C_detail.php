<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_detail extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_coffeeshop', 'ref');
    }

    public function index()
    {
        $data['titlepage'] = "Detail Rekomendasi Coffee Shop";
        $data['page'] = "detail";
        $this->load->view('template', $data);
    }

    public function coffee($id)
    {
        $data['titlepage'] = "Detail Rekomendasi Coffee Shop";
        $data['page'] = "detail";
        $data['coffeeshopById'] = $this->ref->getById($id);
        $this->load->view('template', $data);
    }
}
