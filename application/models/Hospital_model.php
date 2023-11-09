<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_model extends CI_Model 
{
	public function hospital_register_model($Arrsave)
	{
		return $this->db->insert('hospital',$Arrsave);

	}
	public function hospital_login_model($login_page)
	{
		$this->db->where($login_page);
		return $this->db->count_all_results('hospital');

	}
	public function Hospital_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('hospital');
		$this->db->where('h_email_id',$email);
		return $this->db->get()->result();

	}
	public function Hospital_update($res)
	{
    return $this->db->update('hospital',$res);

	}
	public function vaccine_model($vacc)
	{
	return $this->db->insert('vaccine',$vacc);
	}
	public function Patient_request_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vaccine_booking');
		$this->db->join('hospital','vaccine_booking.hospital_id=hospital.hosipital_id');
		$this->db->join('patient','vaccine_booking.usr_email=patient.email');
		$this->db->join('vaccine','vaccine.hospital_id=hospital.hosipital_id');
		$this->db->where('hospital.h_email_id',$email);
		return $this->db->get()->result();
	}
	public function Patient_Approval_model($booking_id,$approve)
	{
		$this->db->where('booking_id',$booking_id);
		return $this->db->update('vaccine_booking',$approve);

	}
	public function Patient_Reject_model($booking_id,$reject)
	{
		$this->db->where('booking_id',$booking_id);
		return $this->db->update('vaccine_booking',$reject);

	}
 


}









