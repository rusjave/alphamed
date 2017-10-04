<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {
    public function __construct() {
      parent::__construct();
      $this->load->model(array('user_model'));
    }

    public function index() {
      $user = $this->session->userdata('user');
      print_r($user);
      if ($user) {
        redirect(base_url().'public/home');
      } else {
        $this->load->view('public/login');
      }
    }

    public function auth() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $data = array(
        "username" => $username,
        "password" => $password
      );
      $auth = $this->user_model->authenticate($data);
      if($auth['status'] == 200) {
        echo $auth['status'];
        $this->session->set_userdata('user', $auth['content']);
        redirect(base_url());
      } else {
        $this->session->set_flashdata('You have entered invalid credentials.');
        redirect(base_url());
      }
    }

    public function logout() {
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }
