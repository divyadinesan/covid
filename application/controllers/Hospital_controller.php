<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_controller extends CI_Controller {

	public function Hospital_index()
	{
		$this->load->view('Hospital/Hospital_index');

	}
	public function Hospital_registration()
	{
		$this->load->view('Hospital/Hospital_registration');

	}
   public function hospital_register()
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
						$Arrsave=array('h_name'=>$name,'h_email_id'=>$email,'h_password'=>$password,'h_phone_number'=>$phone,'h_city'=>$city,'h_address'=>$address,'h_exp'=>$exp,'h_exp_certificate'=>$photo,'h_image'=>$photo1,'h_status'=>'pending','h_type'=>'hospital');
						$this->load->model('Hospital_model');
						$var=$this->Hospital_model->hospital_register_model($Arrsave);
						if($var==1)
						 {

	                     echo "<script>alert('Registered successfully!! Please Wait For Admin Approval')</script>";
	                     $this->Hospital_login();	

	                     }
	                     else 
	                     {
	                     echo "<script>alert('try again')</script>";
	                     $this->Hospital_registration();

	                     }

					}
					else
					{
					echo "<script>alert('Invalid Image')</script>";
					$this->Hospital_registration();
					}
			}
			else
			{
			echo "<script>alert('Invalid Image')</script>";
			$this->Hospital_registration();
			
	}
   	}	
   
    public function Hospital_login()
    {

    	$this->load->view('Hospital/Hospital_login');

    }
    public function logout()
    {
        $this->session->sess_destroy();
       $this->load->view('Index/index');
    }
    public function Hospital_login_form()
    {
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
    	$login_page=array('h_email_id'=>$email,'h_password'=>$password,'h_status'=>'Approved');
    	$this->load->model('Hospital_model');
    	$med=$this->Hospital_model->hospital_login_model($login_page);
    	if($med==1)
    	{
    		echo "<script>alert('login successfully')</script>";
    		$this->session->set_userdata('email',$email);
    		$this->Hospital_myprofile();

    	}
    	else
    	{
    		echo "<script>alert('try again')</script>";
	        $this->Hospital_login();


    	}
}
    //   public function Hospital_home()
    //     {
    //     if($this->session->has_userdata('email'))
    //     {
       
    //     $this->load->view('Hospital/Hospital_home');
    //     }
    //     else
    //     {
    //         $this->Hospital_login();
    //     }

    // }
     public function Hospital_myprofile()
    {
    	if($this->session->has_userdata('email'))
		{
    	$this->load->model('Hospital_model');
    	$arr['fet']=$this->Hospital_model->Hospital_fetch();
    	$this->load->view('Hospital/Hospital_myprofile',$arr);
    }
    	else
		{
			$this->Hospital_login();
		}

    }
    public function Hospital_update()
    {
    	$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
    	$phone=$this->input->post('phone');
    	$city=$this->input->post('c/t');
    	$address=$this->input->post('Address');
    	$exp=$this->input->post('experience');
    	// $image=$_FILES['hospital_image']['name'];
     //         $time = Time();
     //         $images = explode('.',$image);
     //         $photo =$time.'.'.end($images);
     //         $config['upload_path']= './Asset/Admin/Hospital';
     //         $config['allowed_types']= 'jpg|png|jpeg';
     //         $config['file_name'] = $photo;
     //         $this->load->library('upload', $config);
     //         $this->upload->initialize($config);

     //         if( $this->upload->do_upload('hospital_image'))
     //        {
     //         $res=array('h_name'=>$name,'h_email_id'=>$email,'h_password'=>$password,'h_phone_number'=>$phone,'h_city'=>$city,'h_address'=>$address,'h_exp'=>$exp,'h_image'=>$photo);
     //        	$this->load->model('Hospital_model');
     //        	$exe=$this->Hospital_model->Hospital_update($res);
     //            if($exe)
     //        	{
     //        	echo "<script>alert('updation successfully')</script>";
	    //         $this->Hospital_update();

     //        	}
     //        	else
     //        	{
     //        	echo "<script>alert('failed')</script>";
	    //         $this->Hospital_update();	
     //        	}
     //        }
     //        else
     //        {
     //        	echo "<script>alert('invalid image')</script>";
	    //         $this->Hospital_update();

     //        }
     //    }

     //    else
     //      {
     //           $res=array('h_name'=>$name,'h_email_id'=>$email,'h_password'=>$password,'h_phone_number'=>$phone,'h_city'=>$city,'h_address'=>$address,'h_exp'=>$exp);
     //            $this->load->model('Hospital_model');
     //            $exe=$this->Hospital_model->Hospital_update($res);
     //            if($exe)
     //            {
     //            echo "<script>alert('updation successfully')</script>";
     //            $this->Hospital_update();

     //            }
     //            else
     //            {
     //            echo "<script>alert('failed')</script>";
     //            $this->Hospital_update();   
     //            }
     //        } 
  $image=$_FILES['hospital_image']['name'];
  if($image!="")
  {
  $time = Time();
  $images = explode('.',$image);
  $Add_photos =$time.'.'.end($images);
  $config['upload_path']= './Asset/Admin/Hospital';
  $config['allowed_types']= 'jpg|png|jpeg';
  $config['file_name'] = $Add_photos;
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if($this->upload->do_upload('hospital_image'))
  {
            $res=array('h_name'=>$name,'h_email_id'=>$email,'h_password'=>$password,'h_phone_number'=>$phone,'h_city'=>$city,'h_address'=>$address,'h_exp'=>$exp,'h_image'=>$photo);
             $this->load->model('Hospital_model');
             $exe=$this->Hospital_model->Hospital_update($res);
                if($exe)
             {
             echo "<script>alert('updation successfully')</script>";
                $this->Hospital_update();

             }
             else
             {
             echo "<script>alert('failed')</script>";
                $this->Hospital_update();    
             }
            }
            else
            {
             echo "<script>alert('invalid image')</script>";
                $this->Hospital_update();

            }
  }
  else
  {
     $res=array('h_name'=>$name,'h_email_id'=>$email,'h_password'=>$password,'h_phone_number'=>$phone,'h_city'=>$city,'h_address'=>$address,'h_exp'=>$exp);
     $this->load->model('Hospital_model');
     $exe=$this->Hospital_model->Hospital_update($res);
     if($exe)
     {
         echo "<script>alert('updation successfully')</script>";
         $this->Hospital_update();


     }
     else
     {
         echo "<script>alert('failed')</script>";
         $this->Hospital_update();    
             }

     }
  }
  public function vaccine()
  {
    if($this->session->has_userdata('email'))
    {
    $this->load->model('Hospital_model');
    $arrdata['hospital']=$this->Hospital_model->Hospital_fetch();
    $this->load->view('Hospital/vaccine',$arrdata);
}
else{
    $this->Hospital_login();
}

}
public function Vaccine_med()
{
    $hospital_id=$this->input->post('hospital_id');
    $h_email_id=$this->input->post('h_email_id');
    $name=$this->input->post('name');
    $description=$this->input->post('description');
    $amount=$this->input->post('amount');
    $image=$_FILES['vaccine_img']['name'];
     if($image!="")
  {
  $time = Time();
  $images = explode('.',$image);
  $Add_photos =$time.'.'.end($images);
  $config['upload_path']= './Asset/Hospital/vaccine';
  $config['allowed_types']= 'jpg|png|jpeg';
  $config['file_name'] = $Add_photos;
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if($this->upload->do_upload('vaccine_img'))
  {  
 

    $vacc=array('hospital_id'=>$hospital_id,'h_email'=>$h_email_id,'V_name'=>$name,'V_img'=>$Add_photos,'V_description'=>$description,'V_amount'=>$amount);
    $this->load->model('Hospital_model');
    $exe121=$this->Hospital_model->vaccine_model($vacc);
    if($exe121=1)
    {
             echo "<script>alert('insertion successfully')</script>";
                $this->vaccine();

             }
             else
             {
             echo "<script>alert('failed')</script>";
                $this->vaccine();    
             }
            }
            else
            {
             echo "<script>alert('invalid image')</script>";
                $this->vaccine();

            }
  }




}
public function Patient_request()
{
  $this->load->model('Hospital_model');
  $arrval['cov']=$this->Hospital_model->Patient_request_model();
  $this->load->view('Hospital/Patient_request',$arrval);
}
public function Patient_Approval($booking_id)
{
  $approve=array('Booking_status'=>'Approved');
  $this->load->model('Hospital_model');
  $execute=$this->Hospital_model->Patient_Approval_model($booking_id,$approve);
  if($execute==1)
  {
     echo "<script>alert('Approved')</script>";
      $this->Patient_request();

  }
  else
  {
     echo "<script>alert('failed')</script>";
     $this->Patient_request();
}

}
public function Patient_Reject($booking_id)
{
  $reject=array('Booking_status'=>'Reject');
  $this->load->model('Hospital_model');
  $variable=$this->Hospital_model->Patient_Reject_model($booking_id,$reject);
  if($variable==1)
  {
     echo "<script>alert('Reject')</script>";
      $this->Patient_request();

  }
  else
  {
     echo "<script>alert('failed')</script>";
      $this->Patient_request();
 }

}
}









