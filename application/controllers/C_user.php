<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
    public function index()
    {
        $data['titlepage'] = "Home";
        $data['page'] = "index";
        $this->load->view('template', $data);
    }
}
