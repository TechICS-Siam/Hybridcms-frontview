<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
    }

    public function index()
    {
        $data['page_title'] = 'Dashboard';
        $data['view_file'] = "dashboard";
        $this->templates->admin($data);
    }
}