<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kriteria extends CI_Controller
{
    public function index()
    {
        $data['titlepage'] = "Kriteria";
        $data['page'] = "kriteria";
        $this->load->view('admin/template', $data);
    }
}
