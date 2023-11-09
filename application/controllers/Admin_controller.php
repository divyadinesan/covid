<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller 
{

	public function login()
	{
		$this->load->view('Admin/login');
	}


	public function login_check()
    {
      $email=$this->input->post('Email');
      $password=$this->input->post('Password');
      $login_check=array('admin_email'=>$email,'admin_password'=>$password);
      $this->load->model('Admin_model');
      $count=$this->Admin_model->login_check_model($login_check);
      if($count>0)
      {
      	echo "<script>alert('login successful')</script>";
      	$this->session->set_userdata('email',$email);
      	$this->myprofile();

      }
      else
      {
      	echo "<script>alert('Failed to login')</script>";
      	$this->login();

      }
	}
    
	public function myprofile()
	{
		if($this->session->has_userdata('email'))
		{

		$this->load->model('Admin_model');
		$var['profile']=$this->Admin_model->profile_fetch();
		$this->load->view('Admin/myprofile',$var);
		}
		else
		{
			$this->login();
		}
	}
	
      public function Admin_pwd_updte()
      {
      	if($this->session->has_userdata('email'))
		{
      	$new_pwd=$this->input->post('new_password');
      	$pass=array('admin_password'=>$new_pwd);
      	$this->load->model('Admin_model');
        $upde=$this->Admin_model->pwd_update($pass);
        if($upde==1)
        {
        	 echo "<script>alert('update successfully')</script>";
	          $this->login();	
 }
 else
 {
 	echo "<script>alert('try again')</script>";
	 $this->login();

 }
}
		else
		{
			$this->login();
		}
      
}


    public function Add_hospital()
	{

		$this->load->view('Admin/Add_hospital');
	}
	public function hospital_insert()
	{
         $name=$this->input->post('name');
		 $email=$this->input->post('email');
		 $password=$this->input->post('password');
		 $phone=$this->input->post('phone');
		 $city=$this->input->post('c/t');
		 $address=$this->input->post('Address');
		 $exp=$this->input->post('experience');

			$image=$_FILES['certificate']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Admin/certificate/';
			$config['allowed_types']= 'jpg|png|jpeg|pdf';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if( $this->upload->do_upload('certificate'))
			{
					$image1=$_FILES['image']['name'];
					$time1 = Time();
					$images1 = explode('.',$image1);
					$photo1 =$time1.'.'.end($images1);
					$config1['upload_path']= './Asset/Admin/hospital/';
					$config1['allowed_types']= 'jpg|png|jpeg|pdf';
					$config1['file_name'] = $photo1;
					$this->load->library('upload', $config1);
					$this->upload->initialize($config1);
					if( $this->upload->do_upload('image'))
					{
						 $Arrdata=array('h_name'=>$name,'h_email_id'=>$email,'h_password'=>$password,'h_phone_number'=>$phone,'h_city'=>$city,'h_address'=>$address,'h_exp'=>$exp,'h_exp_certificate'=>$photo,'h_image'=>$photo1,'h_status'=>'Approved','h_type'=>'Admin');
						 $this->load->model('Admin_model'); 
	                     $exe=$this->Admin_model->hospital_insrt_model($Arrdata);
	                     if($exe==1)
	                     {

	                     echo "<script>alert('Insertion successfully')</script>";
	                     $this->Add_hospital();	

	                     }
	                     else 
	                     {
	                     echo "<script>alert('try again')</script>";
	                     $this->Add_hospital();

	                     }

					}
					else
					{
					echo "<script>alert('Invalid Image')</script>";
					$this->Add_hospital();
					}
			}
			else
			{
			echo "<script>alert('Invalid Image')</script>";
			$this->Add_hospital();
			}
	}
	public function Manage_hospital()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Admin_model');
		    $var['med']=$this->Admin_model->manage_admin_fetch();
		    $var['vac']=$this->Admin_model->manage_hospital_fetch();
			$this->load->view('Admin/Manage_hospital',$var);
		}
		else
		{
			$this->login();
		}
	}
	public function Verify_hospital()
	{
		$this->load->model('Admin_model');
		$Arrdata['hospital']=$this->Admin_model->hospital_fetch_model();
		$this->load->view('Admin/Verify_hospital',$Arrdata);
	}

	public function Approve_hospital_request($hosipital_id)
	{
		$hospital_status=array('h_status'=>'Approved');
		$this->load->model('Admin_model');
		$execute=$this->Admin_model->hospital_verify_model($hospital_status,$hosipital_id);
		if($execute)
		{
			 echo "<script>alert('Approved successfully')</script>";
	         $this->Verify_hospital();	

	    }
	    else 
	    {
	        echo "<script>alert('try again')</script>";
	        $this->Verify_hospital();

	    }
		
		
	}
	public function Reject_hospital($hosipital_id)
	{
		$hosipital_status=array('h_status'=>'Reject');
		$this->load->model('Admin_model');
		$variable = $this->Admin_model->hospital_rej_model($hosipital_status,$hosipital_id);
		if($variable)
		{
			echo "<script>alert('Rejected successfully')</script>";
			$this->Verify_hospital();

		}
		else
		{
			echo "<script>alert('try again')</script>";
			$this->Verify_hospital();

		}


	}
	public function Edit_hospital($hosipital_id)
	{
		$this->load->model('Admin_model');
		$varr['cov']=$this->Admin_model->edit_data_model($hosipital_id);
		$this->load->view('Admin/Edit_hospital',$varr);

	}

	public function delete_hospital($hosipital_id)
	{
		$this->load->model('Admin_model');
		$dele=$this->Admin_model->del_data_model($hosipital_id);
		if($dele==1)
		{
			echo "<script>alert('deleted successfully')</script>";
			$this->Manage_hospital();

		}
		else
		{
			echo "<script>alert('try again')</script>";
			$this->Manage_hospital();
		}
	}


	




public function logout()
{
	$this->session->sess_destroy();
	$this->load->view('Index/index');

}
public function Patient_details()
{
	$this->load->model('Admin_model');
	$medica['mem'] =$this->Admin_model->Patient_details_model();
	$this->load->view('Admin/Patient_details',$medica);
}
public function Payment_details()
{
	$this->load->model('Admin_model');
	$mis['var']=$this->Admin_model->Payment_details_fetch();
	$this->load->view('Admin/Payment_details',$mis);
}















	
	















}