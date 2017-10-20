<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Apps extends AUTH_Controller
  {
    public function __construct() {
      parent::__construct();
      // $this->load->model('M_pegawai');
    }

    public function index() {
      $this->load->view('apps/Apps');
    }
  }
