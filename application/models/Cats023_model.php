<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats023_model extends CI_Model {

	public function create()
	{
		$data = array (
			'name_023' => $this->input->post('name_023'), 
			'type_023' => $this->input->post('type_023'), 
			'gender_023' => $this->input->post('gender_023'), 
			'age_023' => $this->input->post('age_023'), 
			'price_023' => $this->input->post('price_023')
		);
		$this->db->insert('cats023',$data);
	}
	
	public function read()
	{
		$query=$this->db->get('cats023');
		return $query->result();
	}
	
	public function read_by($id)
	{
		$this->db->where('id_023',$id);
		$query=$this->db->get('cats023');
		return $query->row();
	}
	
	public function update($id)
	{
		$data = array (
			'name_023' => $this->input->post('name_023'), 
			'type_023' => $this->input->post('type_023'), 
			'gender_023' => $this->input->post('gender_023'), 
			'age_023' => $this->input->post('age_023'), 
			'price_023' => $this->input->post('price_023')
		);
		$this->db->where('id_023',$id);
		$this->db->update('cats023',$data);
	}
	
	public function delete($id)
	{
		$this->db->where('id_023',$id);
		$this->db->delete('cats023');
	}
}
