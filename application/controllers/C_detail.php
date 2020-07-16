<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detail extends CI_Controller {
    public function index()
    {
        $data['titlepage'] = "Detail Rekomendasi Coffee Shop";
        $data['page'] = "detail";
        $this->load->view('template', $data);
    }
}
