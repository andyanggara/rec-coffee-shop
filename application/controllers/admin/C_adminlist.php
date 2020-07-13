<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_adminlist extends CI_Controller
{
    public function index()
    {
        $data['titlepage'] = "Daftar Admin";
        $data['page'] = "adminlist";
        $this->load->view('admin/template', $data);
    }
}
