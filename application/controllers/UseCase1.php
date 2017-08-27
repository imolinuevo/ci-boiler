<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UseCase1 extends CI_Controller {

	public function index()
	{
		$this->load->view('use_case1/use_case1');
	}

	public function page1()
	{
		$data['example'] = "Example";
		$this->load->view('use_case1/page1', $data);
	}

	public function page2()
	{
		$this->load->view('use_case1/header');
		$this->load->view('use_case1/page2');
		$this->load->view('use_case1/footer');
	}
}
