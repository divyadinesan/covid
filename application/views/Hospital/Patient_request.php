<?php
$this->load->view('Hospital/Layout/Hospital_header');
?><br><br><br><br><br><br>
<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2 align="center">Patient Request</h2>
<br><br>
<div class="row">
		<?php
foreach ($cov as $medical) 
{


    	?>
  <div class="column">
    <div class="card">
    
      
     
     
     
      
    </div>
  </div>

  <?php
}

?>

</body>

<br><br><br><br><br><br><br><br>
</html>

 -->
<br><br><br><br><br><br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<br><br>
<h2 align="center" ><b>Patient Request</b></h2><br><br>


<div class="row">
	<?php


foreach ($cov as $medical) 

	{

?>
<!-- <h3>:</h3><br>
      <h3>:<?php echo $medical->usr_email?></h3><br>
      <h3>Address:<?php echo $medical->address?></h3><br>
      <h3>City:<?php echo $medical->city?></h3><br>
      <h3>Phone Number:<?php echo $medical->phone_number?></h3><br>
      <h4>Hospital Name:</h4><br>
      <h3>Hospital Email:<?php echo $medical->h_email_id?></h3><br>
      <h3>Vaccine Name:</h3><br>
      <h3>Booking Date:</h3><br>
      <h3>Booking Time:</h3><br>
      <h3>Booking Status:</h3><br>
      <h3>Payment Status:<?php echo $medical->Payment_status?></h3><br> -->
  <div class="column">
    <div class="card">
    	<br><br>
    	<h5><b>Patient Name : </b><?php echo $medical->name?></h5><br>
    		
    	<h5><b>Hospital Name : </b><?php echo $medical->h_name?></h5><br>
    	<h5><b>Vaccination Name :</b> <?php echo $medical->V_name?></h5><br>
    	<h5><b>Booking Date :</b><?php echo $medical->Booking_date?></h5><br>
    	<h5><b>Booking Time :</b> <?php echo $medical->Booking_time?></h5><br>
    	<h5><b>Booking Status :</b><?php echo $medical->Booking_status?></h5><br>
        <h5><b>Payment Status :</b><?php echo $medical->Payment_status?></h5><br>
       <a href="<?php echo base_url('index.php/Hospital_controller/Patient_Approval/'.$medical->booking_id)?>"><button style="color: white;background-color: green;padding-left: -50px">Approve</button> 

       <a href="<?php echo base_url('index.php/Hospital_controller/Patient_Reject/'.$medical->booking_id)?>"><button style="color:white;background-color: red">Reject</button>
      <br><br>
    </div>
  </div>

 <?php

}
 ?>
  
  
</div>

</body>
</html>
<br><br><br><br><br><br>












<?php
$this->load->view('Hospital/Layout/Hospital_footer');
?>
