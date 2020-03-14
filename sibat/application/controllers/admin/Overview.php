<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view("admin/overview");
      
	}
}