<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_controller extends CI_Controller
 {
	public function Patient_registration()
	{
		$this->load->view('Patient/Patient_registration');
	}

	public function Patient_index()
	{
		$this->load->view('Patient/Patient_index');
	}

	public function Patient_register()
	{
		$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
   		$phone=$this->input->post('phone');
        $city=$this->input->post('c/t');
    	$address=$this->input->post('Address');
   
             $image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/Patient/P_image/';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{
				$Arrvalue=array('name'=>$name,'email'=>$email,'password'=>$password,'phone_number'=>$phone,'city'=>$city,'address'=>$address,'Patient_img'=>$photo);
				$this->load->model('Patient_model');
				$exe=$this->Patient_model->Patient_model_register($Arrvalue);
			
				if($exe==1)
				{
					echo "<script>alert('Successfully Registered')</script>";
					$this->Patient_login();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->Patient_registration();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->Patient_registration();
			}
	}

	public function Patient_login()
	{
	 	$this->load->view('Patient/Patient_login');
	}

	public function Patient_login_form()
	{
	 	$email=$this->input->post('email');
	 	$password=$this->input->post('password');
	 	$arrval=array('email'=>$email,'password'=>$password);
	 	$this->load->model('Patient_model');
	 	$attend=$this->Patient_model->Patient_log($arrval);
	 	if($attend==1)
	 	{
	        echo "<script>alert('Login Successfully')</script>";
	        $this->session->set_userdata('email',$email);
		    $this->Patient_home();
	 	}
	 	else
	 	{
	 		echo "<script>alert('login failed')</script>";
		    $this->Patient_login();

	 	}

	}

	public function Patient_home()
	{
	 	if($this->session->userdata('email'))
	 	{
	 	$this->load->model('Patient_model');
	 	 $varr1['fett']=$this->Patient_model->Patient_fetch();
	 	$this->load->view('Patient/Patient_home',$varr1);
	 	}
	 	else
	 	{
	 		$this->Patient_login();
	 	}
	}

	public function logout()
	{
	 	$this->session->sess_destroy();
	 	$this->load->view('Index/index');
	}


	 public function Patient_profile()
	 {
	 	if($this->session->userdata('email'))
	 	{
	 	$this->load->model('Patient_model');
	 	$varr3['data']=$this->Patient_model->Vaccine_login_id();
	 	$this->load->view('Patient/Patient_profile',$varr3);
	 	}
		else
		{
		 	$this->Patient_login();
		}
	 }

	public function hospital_vaccine($hosipital_id)
	{
	 	if($this->session->userdata('email'))
	 	{
	 	$this->load->model('Patient_model');
	 	$varrdata['exee']=$this->Patient_model->Patient_vaccine_fetch($hosipital_id);
	 	$this->load->view('Patient/hospital_vaccine',$varrdata);
	 	}
		 else
		 {
		 	$this->Patient_login();
		 }
	}

	 public function vaccine_booking($vaccination_id)
	 {
	 if($this->session->userdata('email'))
	 	{
	 
	 	$this->load->model('Patient_model');
	 	$arrdatas['vaccine']=$this->Patient_model->Vaccine_booking_model($vaccination_id);
	 	$arrdatas['user']=$this->Patient_model->Vaccine_login_id();
	 	$this->load->view('Patient/vaccine_booking',$arrdatas);
	 }
	 else
	 {
	 	$this->Patient_login();
	 }

	 }
	 public function Vaccination_booking()
	 {
	 	 $hospital_id = $this->input->post('hospital_id');
	 	 $vaccination_id = $this->input->post('vaccination_id');
	 	 $usr_id =$this->input->post('user_id');
	 	 $usr_email=$this->input->post('user_email');
	 	 $Vaccination_name=$this->input->post('Name');
	 	 $booking_date=$this->input->post('Date');
	 	 $booking_time=$this->input->post('Booking_time');
	 	 $medical=array('hospital_id'=>$hospital_id,'vaccination_id'=>$vaccination_id,'user_id'=>$usr_id,'usr_email'=>$usr_email,'Vaccine_name'=> $Vaccination_name,'Booking_date'=>$booking_date,'Booking_time'=> $booking_time,'Booking_status'=>'pending','Payment_status'=>'pending');
	 	$this->load->model('Patient_model'); 
	 	$vacc=$this->Patient_model->Vaccination_model_form($medical);
	 	if($vacc=1)
	 	{
	 		echo "<script>alert('Thank you!! Waiting for Confirmation.')</script>";
			$this->My_bookings();
	 	}
	 	else
	 	{
	 		echo "<script>alert('Try Again')</script>";
			$this->Patient_login();
	 	}

	 }
	 public function My_bookings()
	 {
	 	$this->load->model('Patient_model');
	 	$var['cov']=$this->Patient_model->my_booking_fetch();
	 	$this->load->view('Patient/My_bookings',$var);
	 }
	 public function patient_profile_update($id)
	 {
	 	$name=$this->input->post('name');
	 	$email=$this->input->post('email');
	 	$phone=$this->input->post('phone');
	 	$city=$this->input->post('city');
	 	$address=$this->input->post('address');
	 	$image=$_FILES['patient']['name'];
		if($image!="")
		{
		$time = Time();
		$images = explode('.',$image);
		$Add_photos =$time.'.'.end($images);
		$config['upload_path']= './Asset/Patient/P_image/';
		$config['allowed_types']= 'jpg|png|jpeg';
		$config['file_name'] = $Add_photos;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('patient'))
		{
			$arrvar= array('name'=>$name,'email'=>$email,'phone_number'=>$phone,'city'=>$city,'address'=>$address,'Patient_img'=>$Add_photos);
					$this->load->model('Patient_model');
					$val=$this->Patient_model->profile_updation_model($arrvar,$id);
					if($val=1)
					{
						echo "<script>alert('updation successfully')</script>";
			            $this->Patient_profile();

					}
					else
					{
						echo "<script>alert('failed !try again')</script>";
			            $this->Patient_profile();

					}
				}
					else
					{
						echo "<script>alert('invalid image')</script>";
			            $this->Patient_profile();

					}
		}
				else
				{
					$arrvar= array('name'=>$name,'email'=>$email,'phone_number'=>$phone,'city'=>$city,'address'=>$address);
					$this->load->model('Patient_model');
					$val=$this->Patient_model->profile_updation_model($arrvar,$id);
					if($val=1)
					{
						echo "<script>alert('updation successfully')</script>";
			            $this->Patient_profile();

					}
					else
					{
						echo "<script>alert('failed !try again')</script>";
			            $this->Patient_profile();

					}

				}

	}




	public function cancel_booking($booking_id)
	{
		$this->load->model('Patient_model');
	     $exe13 =$this->Patient_model->cancel_booking_model($booking_id);
	       if($exe13)
	       	{
	    echo"<script>alert('deleted successfully')</script>";
	    $this->My_bookings();
	 }
	 else
	 {
	    echo"<script>alert('try again')</script>";
	    $this->My_bookings();

	 }


	}
	public function Payment($booking_id)
	{   
		
		$this->load->model('Patient_model');
		$pay['vacc']=$this->Patient_model->my_bkng_fetch($booking_id);
		
		$this->load->view('Patient/Payment',$pay);
}
	public function Payment_display()
	{
		$booking_id=$this->input->post('booking_id');
		$card_name=$this->input->post('card_name');
	    $card_number=$this->input->post('card_number');
		$cvc=$this->input->post('cvc');
		$expire=$this->input->post('expire');
		$amount=$this->input->post('amout');
		$patient_id=$this->input->post('patient_id');
		$patient_email=$this->input->post('patient_email');
		$hospital_id=$this->input->post('hospital_id');
		$hospital_email=$this->input->post('hospital_mail');

        $var=array('booking_id'=>$booking_id,'card_name'=>$card_name,'card_number'=>$card_number,'cvc'=>$cvc,'expire'=>$expire,'amount'=>$amount,'patient_id'=>$patient_id,'hospital_id'=>$hospital_id,'patient_email'=>$patient_email,'hospital_email'=>$hospital_email);
		$this->load->model('Patient_model');
        $exe12=$this->Patient_model->Payment_display_model($var);
        if($exe12==1)
        {
        	$payment_update=array('Payment_status'=>'Payed');
        	$this->load->model('Patient_model');
	        $execute=$this->Patient_model->payment_update_model($payment_update,$booking_id);
	        if($execute==1)
	        {
		        echo"<script>alert('Payment Completed')</script>";
			    $this->receipt();
			}
			else
			{
				  echo"<script>alert('try again')</script>";
	   				 $this->My_bookings();
			}

        }
        else
        {
        echo"<script>alert('try again')</script>";
	    $this->My_bookings();

        }
	}
	public function receipt()
	{  
		$this->load->model('Patient_model');
		$ral['char']=$this->Patient_model->my_booking_fetch();
        $ral['var31']=$this->Patient_model-> receipt_fetch();
		$this->load->view('Patient/receipt',$ral);
	}



}