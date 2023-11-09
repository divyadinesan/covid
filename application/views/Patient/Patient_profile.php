<?php
$this->load->view('Patient/Layout/Patient_header');
?>

<style type="text/css">
	
	.send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
	<br><br><br><br>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               My Profile
            </h1>
           
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
<?php
foreach ($data as $vaccine12) 
  

?>



               <form action="<?php echo base_url('index.php/Patient_controller/patient_profile_update/'.$vaccine12->id)?>" method="post" enctype="multipart/form-data" name="login">
                  <div class="form-group">
                  	<label><b>Name</b></label>
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name"value="<?php echo $vaccine12->name?>">
                  </div>
                  <div class="form-group">
                  	<label><b>Email</b></label>
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email"value="<?php echo $vaccine12->email?>">
                  </div>
                  <div class="form-group">
                  	<label><b>Phone Number</b></label>
                     <input type="number" min="0" name="phone" id="phone"  class="form-control my-input" placeholder="Phone"value="<?php echo $vaccine12->phone_number?>">
                  </div>
                   <div class="form-group">
                   	<label><b>City</b></label>
                     <input type="text" name="city"  class="form-control my-input" id="name" placeholder="City"value="<?php echo $vaccine12->city?>">
                  </div>
                   <div class="form-group">
                   	<label><b>Address</b></label>
                     <input type="text" name="address"  class="form-control my-input" id="name" placeholder="Address"value="<?php echo $vaccine12->address?>">
                  </div>
                  <div class="form-group">
                   	<label><b>Patient Image</b></label><br>
                    
                    <img src="<?php echo base_url('Asset/Patient/p_image/'.$vaccine12->Patient_img)?>"style="width: 150px;height: 100px">

                  </div>
                   <div class="form-group">
                   	<label><b>Choose New Image</b></label>
                     <input type="file" name="patient"  class="form-control my-input" id="name">
                  </div>

                  <?php


                  ?>

                  <br>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Update</button>
                  </div>
                 
                 
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<br><br><br><br>
<br><br><br><br>
<?php
$this->load->view('Patient/Layout/Patient_footer');
?>