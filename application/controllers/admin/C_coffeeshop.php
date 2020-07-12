<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_coffeeshop extends CI_Controller
{
    public function index()
    {
        $data['titlepage'] = "Daftar Coffee Shop";
        $data['page'] = "coffeeshop";
        $this->load->view('admin/template', $data);
    }
}
