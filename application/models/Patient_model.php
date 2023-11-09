<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model 
{
	public function Patient_model_register($Arrvalue)
	{
	  return $this->db->insert('Patient',$Arrvalue);

	}
	public function Patient_log($arrval)
	{
		$this->db->where($arrval);
		return $this->db->count_all_results('Patient');
	}
	public function Patient_fetch()
	{
		$this->db->select('*');
		$this->db->from('hospital');
		return  $this->db->get()->result();
	}
	public function Patient_vaccine_fetch($hosipital_id)
	{
		$this->db->select('*');
		$this->db->from('vaccine');
		$this->db->where('hospital_id',$hosipital_id);
		return  $this->db->get()->result();
	}
	public function Vaccine_booking_model($vaccination_id)
	{
		$this->db->select('*');
		$this->db->from('vaccine');
		$this->db->join('hospital','vaccine.hospital_id=hospital.hosipital_id');
		$this->db->where('vaccination_id',$vaccination_id);
		return  $this->db->get()->result();
	}
	public function Vaccine_login_id()
	{   $email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('patient');
		$this->db->where('email',$email);
		return  $this->db->get()->result();
	}
	public function Vaccination_model_form($medical)
	{
	  return $this->db->insert('vaccine_booking',$medical);
	}
	public function my_booking_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vaccine_booking');
		$this->db->join('hospital','hospital.hosipital_id=vaccine_booking.hospital_id');
		$this->db->join('vaccine','vaccine.vaccination_id=vaccine_booking.vaccination_id');
		$this->db->join('patient','patient.id=vaccine_booking.user_id');
		$this->db->where('vaccine_booking.usr_email',$email);
		return  $this->db->get()->result();


	}
	public function my_bkng_fetch($booking_id)
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vaccine_booking');
		$this->db->join('hospital','hospital.hosipital_id=vaccine_booking.hospital_id');
		$this->db->join('vaccine','vaccine.vaccination_id=vaccine_booking.vaccination_id');
		$this->db->where('vaccine_booking.usr_email',$email);
		$this->db->where('vaccine_booking.booking_id',$booking_id);
		return  $this->db->get()->result();
	}
	public function profile_updation_model($arrvar,$id)
	{
		  $this->db->where('id',$id);
		  return $this->db->update('patient',$arrvar);

	}
	public function cancel_booking_model($booking_id)
	{
		$this->db->where('booking_id',$booking_id);
	    return	$this->db->delete('vaccine_booking');

	}
	public function Payment_display_model($var)
	{
	 return	$this->db->insert('payment',$var);

}
public function receipt_fetch()
{
	$this->db->select('*');
	$this->db->from('payment');
	return  $this->db->get()->result();

}
public function payment_update_model($payment_update,$booking_id)
{
	$this->db->where('booking_id',$booking_id);
	 return	$this->db->update('vaccine_booking',$payment_update);
}

	


}



