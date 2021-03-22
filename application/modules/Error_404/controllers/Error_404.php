<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function error_page()
    {
       $this->load->view('error_page');
    }
}
