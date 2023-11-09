<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {
	public function index()
	{
		$this->load->view('Index/index');

	}
	public function about()
	{
		$this->load->view('Index/about');
	}
	public function contact()
	{
		$this->load->view('Index/contact');
	}
	




















}
