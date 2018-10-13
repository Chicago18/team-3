<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('grocery_CRUD');
    $this->load->model('helper');
  }

  public function index(){
    if (!$this->ion_auth->logged_in())
		{
			// redirect them to the dashboard
      redirect('auth/', 'refresh');
		}
    $this->load->view('elements/header');

    if($this->ion_auth->is_teacher()){
      $output = null;
      $data = array('output' => $output, 'title' => "Welcome back");

      $this->load->view('elements/teacher_nav');
      $this->load->view('dashboard/teacher-index', $data);
      $this->load->view('elements/footer');

    }else if($this->ion_auth->is_student()){
      $this->load->view('elements/student_nav');
    }else if($this->ion_auth->is_parent()){
      $data = array('title' => "Enrollment Form");
      $this->load->view('elements/parent_nav');
      $this->load->view('dashboard/iframeenrollment', $data);
      $this->load->view('elements/footer');
    }
  }

  public function topics(){
    if (!$this->ion_auth->logged_in())
		{
			// redirect them to the dashboard
      redirect('auth/', 'refresh');
		}

    if($this->ion_auth->is_teacher()){

      $crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('topics');
			$crud->set_subject('Topics');

      $output = $crud->render();

      $data = array('output' => $output, 'title' => "Topics");

      $this->load->view('elements/header');
      $this->load->view('elements/teacher_nav');
      $this->load->view('dashboard/teacher-main', $data);
      $this->load->view('elements/footer');
    }
  }

  public function level(){
    if (!$this->ion_auth->logged_in())
		{
			// redirect them to the dashboard
      redirect('auth/', 'refresh');
		}

    if($this->ion_auth->is_teacher()){

      $crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('educationLevel');
			$crud->set_subject('Education Level');

      $output = $crud->render();

      $data = array('output' => $output, 'title' => "Level of Education");

      $this->load->view('elements/header');
      $this->load->view('elements/teacher_nav');
      $this->load->view('dashboard/teacher-main', $data);
      $this->load->view('elements/footer');
    }
  }

  public function questions(){
    if (!$this->ion_auth->logged_in())
		{
			// redirect them to the dashboard
      redirect('auth/', 'refresh');
		}

    if($this->ion_auth->is_teacher()){

      $crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('questions');
			$crud->set_subject('Question');
      $crud->set_relation('level_id','educationLevel','educationLevel');
      $crud->set_relation('topic_id','topics','topic');
      $crud->display_as('level_id','Level of Education')->display_as('topic_id','Topic');

      $output = $crud->render();

      $data = array('output' => $output, 'title' => "Questions");

      $this->load->view('elements/header');
      $this->load->view('elements/teacher_nav');
      $this->load->view('dashboard/teacher-main', $data);
      $this->load->view('elements/footer');
    }
  }

  public function worksheets(){
    if (!$this->ion_auth->logged_in())
    {
      // redirect them to the dashboard
      redirect('auth/', 'refresh');
    }if($this->ion_auth->is_teacher()){

      $crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('worksheet');
			$crud->set_subject('Worksheet');

      $crud->columns('title','description');
      $crud->fields('title','description');

      $output = $crud->render();

      $data = array(
        'worksheets' => $this->helper->getWorksheets(),
        'title' => "Worksheets",
        'output' => $output
      );

      $this->load->view('elements/header');
      $this->load->view('elements/teacher_nav');
      $this->load->view('dashboard/teacher-main', $data);
      $this->load->view('elements/footer');
    }
  }

  public function worksheet($worksheet_id){
    $this->load->view('dashboard/enrollment_form', $data);
  }

  public function getEnrollmentForm(){
    if (!$this->ion_auth->logged_in())
    {
      // redirect them to the dashboard
      redirect('auth/', 'refresh');
    }if($this->ion_auth->is_parent()){
      $this->load->view('dashboard/enrollment_form');
    }
  }
}
