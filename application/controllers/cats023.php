<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats023 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cats023_model');
	}

	public function index()
	{
		$data['cats']=$this->Cats023_model->read();
		$this->load->view('cats023/cat_list_023',$data);
	}
	
	public function add()
	{
		if($this->input->post('submit')) {
			$this->Cats023_model->create();
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Cat Succesfully Added !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Cat Add Failed !</p>');
			}
			redirect('cats023');
		}
		
		$this->load->view('cats023/cat_form_023');
	}
	
	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Cats023_model->update($id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Cat Succesfully Updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Cat Update Failed !</p>');
			}
			redirect('cats023');
		}
		$data['cat']=$this->Cats023_model->read_by($id);
		$this->load->view('cats023/cat_form_023',$data);
	}
	
	public function delete($id)
	{
		$this->Cats023_model->delete($id);
		if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Cat Succesfully Deleted !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Cat Delete Failed !</p>');
			}
		redirect('cats023');
	}
}
