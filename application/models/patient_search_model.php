<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Patient_Search_Model extends CI_Model {
    protected $table = 'lab_test_results';

    function __construct() {
      parent::__construct();
    }

    public function search($keyword) {
        $sql = "SELECT * FROM lab_test_results WHERE id = $keyword";
        return $this->db->query($sql)->result();
    }
  }
?>
