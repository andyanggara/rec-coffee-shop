<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_coffeeshop', 'ref');
    }

    public function index()
    {
        $data['titlepage'] = "Home";
        $data['page'] = "index";
        $data['coffeeshopList'] = $this->ref->getAll();
        $this->load->view('template', $data);
    }
}
