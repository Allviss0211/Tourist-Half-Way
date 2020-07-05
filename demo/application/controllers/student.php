<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

  public function index(){
  	$this->load->model("student_model");
  	$data["list"] = $this->student_model->getList();
    $this->load->view("student/index", $data);
  }
}