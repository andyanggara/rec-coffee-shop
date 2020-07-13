<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{
    public function index()
    {
        $data['titlepage'] = "Dashboard";
        $data['page'] = "dashboard";
        $this->load->view('admin/template', $data);
    }
}
