<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
	public function index(){
		$this->load->view('admin/login');
    }
    public function dashboard(){
        $this->load->view('admin/dashboard');
    }
    public function list_admin(){
        $this->load->view('admin/list_admin');
    }
    public function data_coffee(){
        $this->load->view('admin/data_coffee');
    }
}
