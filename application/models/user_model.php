<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class User_Model extends CI_Model {
    protected $table = 'users';

    function __construct() {
      parent::__construct();
    }

    public function authenticate($data) {
      $username = $data['username'];
      $password = $data['password'];

      $sql = "SELECT * FROM users WHERE username = '$username'";
      $user = $this->db->query($sql)->row();
      $hash = $user->password;

      if (password_verify($password, $hash)) {
        $result = [
          "status" => "200",
          "content" => $user
        ];
      } else {
        $result = [
          "status" => "403",
          "content" => ""
        ];
      }
      return $result;
    }

  }
?>
