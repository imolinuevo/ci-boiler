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

	public function page3()
	{
		$this->load->view('use_case1/page3');
	}

	public function searchExampleName() {
		 redirect('usecase1/page2');
	}

	public function asyncReq() {
		$name = $this->input->post('name');
		$db_res = $this->db->query('SELECT * FROM example');
		$ret = array('msg' => ('Custom msg for '.$name), 'query' => $db_res->result());

    header('Content-Type: application/json');
    echo json_encode($ret);
	}
}
