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
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titlepage'] = "Dashboard";
        $data['page'] = "dashboard";
        $data['count'] = (object) ['adminlist' => $this->refAdmin->count(), 'coffeeshop' => 10];
        $this->load->view('admin/template', $data);
    }
}
