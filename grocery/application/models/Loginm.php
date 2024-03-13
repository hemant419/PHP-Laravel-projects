<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginm extends CI_Model{

public function login()
{
	$em=$this->input->post('em');
	$ps=$this->input->post('ps');
	
		$this->db->where('email_id',$em);
		$this->db->where('password',$ps);
		
		$data=$this->db->get('adminregister')->result();
		return count($data);
		
		}
		
		public function show()
		{
				$em=$this->input->post('em');
				$ps=$this->input->post('ps');
	
				$this->db->where('email_id',$em);
				$this->db->where('password',$ps);
		
				$data=$this->db->get('adminregister')->row();
				return $data;
	
		}
}
