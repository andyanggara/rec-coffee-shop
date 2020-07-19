<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rekomendasi extends CI_Controller {
    public function index()
    {
        $data['titlepage'] = "Rekomendasi Coffee Shop";
        $data['page'] = "rekomendasi";
        $this->load->view('template', $data);
    }
}
