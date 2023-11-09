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

<form action ="<?php echo base_url('index.php/Hospital_controller/Vaccine_med')?>"method="post" enctype="multipart/form-data"><br><br>
	<div align="center">
	<h1 > <b></b></h1>
</div><br><br>
<?php
foreach ($hospital as  $medic) 

	


?>
      <input type="hidden" name="hospital_id"value="<?php echo $medic->hosipital_id?>">
      <input type="hidden" name="h_email_id"value="<?php echo $medic->h_email_id?>">
	

	<label style="color:black;margin-left: 225px">VACCINE NAME</label><br><br>

	<input type="text" name="name"placeholder="name"value=""><br><br>
	<label style="color:black;margin-left: 225px">IMAGE</label><br>
	<label style="color:black;margin-left: 225px"></label><br>
	<input type="file" name="vaccine_img"placeholder="vaccine_img"value="">
	<label style="color:black;margin-left: 225px">DESCRIPTION</label><br>
	<input type="text" name="description"placeholder="description"value=""><br><br>
	<label style="color:black;margin-left: 225px">AMOUNT</label><br>
	<input type="text" name="amount"placeholder="amount"value=""><br>
	<br><br>
	<input type="submit" name="" style="background-color: grey;color: white;height: 35px">
	<br><br>
	
</form>


</div>
<br><br><br><br>







<?php
$this->load->view('Hospital/Layout/Hospital_footer');
?>