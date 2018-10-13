<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function index(){
    if (!$this->ion_auth->logged_in())
		{
			// redirect them to the dashboard
      redirect('auth/', 'refresh');
		}
    $this->load->view('elements/header');

    if($this->ion_auth->is_teacher()){
      $this->load->view('elements/teacher_nav');
    }else if($this->ion_auth->is_student()){
      $this->load->view('elements/student_nav');
    }else if($this->ion_auth->is_parent()){
      $this->load->view('elements/parent_nav');
    }

  }
}
