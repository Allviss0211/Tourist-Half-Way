<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['_view'] = 'home';
		$this->load->view('layouts/home_main', $data);
	}

}
