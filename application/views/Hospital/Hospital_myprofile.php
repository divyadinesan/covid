<?php
$this->load->view('Hospital/Layout/Hospital_header');
?>
<br><br><br><br>
<div >
<style type="text/css">
	input{
		width: 1000px;height: 45px;
		margin-left: 225px;
	}
	h1{
		color: black;
	}
</style>

<form action = "<?php echo base_url('index.php/Hospital_controller/Hospital_update')?>"method="post" enctype="multipart/form-data"><br><br>
	<div align="center">
	<h1 > <b>MY PROFILE</b></h1>
</div><br><br>
	<?php
foreach ($fet as $med) 
{
	

?>
<label style="color:black;margin-left: 225px">NAME</label><br><br>
	<input type="text" name="name"placeholder="Name"value="<?php echo $med->h_name?>"><br><br>
	<label style="color:black;margin-left: 225px">Email</label><br><br>
	<input type="text" name="email"placeholder="Email"value="<?php echo $med->h_email_id?>"><br><br>
	<label style="color:black;margin-left: 225px">Password</label><br><br>
	<input type="text" name="password"placeholder="Password"value="<?php echo $med->h_password?>"><br><br>
	<label style="color:black;margin-left: 225px">Phone Number</label><br><br>
	<input type="text" name="phone_number"placeholder="Phone number"value="<?php echo $med->h_phone_number?>"><br><br>
	<label style="color:black;margin-left: 225px">City</label><br><br>
	<input type="text" name="city"placeholder="city"value="<?php echo $med->h_city?>"><br><br>
	<label style="color:black;margin-left: 225px">Address</label><br><br>
	<input type="text" name="address"placeholder="Address"value="<?php echo $med->h_address?>"><br><br>
	<label style="color:black;margin-left: 225px">Experience</label><br><br>
	<input type="text" name="experience"placeholder="Experience"value="<?php echo $med->h_exp?>"><br><br><br><br>
	<!-- <br><br><br> -->
	<!-- <label> Hospital Licence</label><br>
	<iframe src="<?php echo base_url('Asset/Admin/certificate/'.$med->h_exp_certificate)?>" style="width:400px; height:180px;" frameborder="0"></iframe>
	<br><br><br>
 -->	<label style="color:black;margin-left: 225px">Hospital Image</label><br><br>
	<img src="<?php echo base_url('Asset/Admin/Hospital/'.$med->h_image)?>" style="height: 100px;width: 400px;margin-left: 225px"><br><br>
	<label style="color:black;margin-left: 225px">Upload New Image</label><br><br>
	<input type="file" name="hospital_image"placeholder="Hospital_image"value="<?php?>"><br><br>
	
	<input type="submit" name="" style="background-color: grey;color: white;height: 35px">
	<br><br>
	<?php
}

?>
</form>


</div>
<br><br><br><br>
<?php
$this->load->view('Hospital/Layout/Hospital_footer');
?>