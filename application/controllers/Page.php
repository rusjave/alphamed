<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct() {
      parent::__construct();
      $this->load->model(array('user_model','patient_search_model',));
    }

	/*
		home page controller
	*/
	public function index()
	{

		$this->load->view('public/home');

	}
	/*
		about page controller
	*/
	public function about()
	{

		$this->load->view('public/about');

	}
	/*
		services page controller
	*/
	public function services()
	{

		$this->load->view('public/services');

	}
	/*
		services page controller
	*/
	public function locations()
	{

		$this->load->view('public/locations');

	}
	/*
		contact page controller
	*/
	public function contact()
	{

		$this->load->view('public/contact');

	}
	/*
		results page controller
	*/
	public function viewresults()
	{

		$this->load->view('public/view-result');

	}
	/*
		results page controller
	*/
	public function results()
	{

		$this->load->view('public/results');

	}
		/*
		pdf page controller
	*/
	public function pdf()
	{

		$this->load->view('public/pdf');

	}
	/*
		login page controller
	*/
    public function login() {
      $user = $this->session->userdata('user');
      //print_r($user);
      if ($user) {
        // redirect(base_url().'public/login-success');
        $this->load->view('public/login-success');
      } else {
        $this->load->view('public/login');
      }
    }
    /*
		login authentication page controller
	*/
	 public function auth() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $data = array(
        "username" => $username,
        "password" => $password
      );
      $auth = $this->user_model->authenticate($data);
      if($auth['status'] == 200) {
        //echo $auth['status'];
        $this->session->set_userdata('user', $auth['content']);
        // redirect(base_url().'login-success');
          $this->load->view('public/login-success');
      } else {
        $this->session->set_flashdata('login_error','You have entered invalid credentials.');
        redirect(base_url().'page/login');
      }
    }	
    /*
		logout page controller
	*/
	public function logout() {
      $this->session->sess_destroy();
      redirect(base_url());
    }
    /*
		search page controller
	*/
	public function search() {
		$search = $this->patient_search_model->search($this->input->post('keyword')); //echo '<pre>';var_dump($search); echo '</pre>';
		$data['results'] = $search;
		$this->load->view('public/results',$data);
	}
	/*
		facilities page controller
	*/
	public function facilities() {
		$this->load->view('public/facilities');
	}
}