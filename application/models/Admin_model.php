<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{

public function login_check_model($login_check)
	{
		$this->db->where($login_check);
		return $this->db->count_all_results('admin');

	}
	public function hospital_insrt_model($Arrdata)
	{
	return	$this->db->insert('hospital',$Arrdata);


	}
	public function profile_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_email',$email);
 		return $this->db->get()->result();

	}
	public function pwd_update($pass)
	{
	    $email=$this->session->userdata('email');
	    $this->db->where('admin_email',$email);
		return  $this->db->update('admin',$pass);

	}
	public function hospital_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('hospital');
	    $this->db->where('h_status','pending');
        return $this->db->get()->result();

	}
	public function hospital_verify_model($hospital_status,$hosipital_id)
	{
		$this->db->where('hosipital_id',$hosipital_id);
		return  $this->db->update('hospital',$hospital_status);
	}
	public function hospital_rej_model($hosipital_status,$hosipital_id)
	{
		$this->db->where('hosipital_id',$hosipital_id);
	  return $this->db->update('hospital',$hosipital_status);

	}
	public function manage_admin_fetch()
	{
		$this->db->select('*');
		$this->db->from('hospital');
		$this->db->where('h_type','Admin');
		return $this->db->get()->result();
	}
	public function manage_hospital_fetch()
	{
		$this->db->select('*');
		$this->db->from('hospital');
		$this->db->where('h_type','hospital');
		return $this->db->get()->result();
	}
	public function edit_data_model($hosipital_id)
	{
		$this->db->select('*');
		$this->db->from('hospital');
		$this->db->where('hosipital_id',$hosipital_id);
		return $this->db->get()->result();
		
	}

public function del_data_model($hosipital_id)
{
	$this->db->where('hosipital_id',$hosipital_id);
	return $this->db->delete('hospital');
}

  public function Patient_details_model()
	{
		$this->db->select('*');
		$this->db->from('patient');
		return $this->db->get()->result();

	}
	public function Payment_details_fetch()
	{
		$this->db->select('*');
	    $this->db->from('payment');
	    $this->db->join('hospital','payment.hospital_id=hospital.hosipital_id');
	    return  $this->db->get()->result();
	}

	


















	
	

}

