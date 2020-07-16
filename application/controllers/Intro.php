<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intro extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['_view'] = 'intro';
		$data['title'] = 'Giới thiệu';
		$this->load->view('layouts/home_main', $data);
	}
}
