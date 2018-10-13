<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('grocery_CRUD');
  }

  public function index(){
    if (!$this->ion_auth->logged_in())
		{
			// redirect them to the dashboard
      redirect('auth/', 'refresh');
		}
    $this->load->view('elements/header');

    if($this->ion_auth->is_teacher()){

      $crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('topics');
			$crud->set_subject('Topics');

      $output = $crud->render();


      $this->load->view('elements/teacher_nav', (array)$output);
    }else if($this->ion_auth->is_student()){
      $this->load->view('elements/student_nav');
    }else if($this->ion_auth->is_parent()){
      $this->load->view('elements/parent_nav');
    }

  }
}
