<?php
$this->load->view('Patient/Layout/Patient_header');
?>
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
<h2 align="center" ><b>My Bookings</b></h2><br><br>


<div class="row">
	<?php


foreach ($cov as $medicine ) 

	{

?>
  <div class="column">
    <div class="card">
    	<h6><b>Name : </b><?php echo $medicine->name?></h6><br>
    	
    	<h6><b>Hospital Name : </b><?php echo $medicine->h_name?></h6><br>
    	<h6><b>Vaccination Name :</b> <?php echo $medicine->V_name?></h6><br>
    	<h6><b>Booking Date :</b><?php echo $medicine->Booking_date?></h6><br>
    	<h6><b>Booking Time :</b> <?php echo $medicine->Booking_time?></h6><br>
    	<h6><b>Booking Status :</b><?php echo $medicine->Booking_status?></h6><br>
      <h6><b>Payment Status :</b><?php echo $medicine->Payment_status?></h6><br>
       <?php
      if($medicine->Payment_status!='Payed')
      {
        ?> 
    <a href="<?php echo base_url('index.php/Patient_controller/cancel_booking/'.$medicine->booking_id)?>"> <button ><b> Cancel Booking</b></button></a><br>
      <?php
      if($medicine->Booking_status=='Approved')
      {
        ?>                                                        
        <a href="<?php echo base_url('index.php/Patient_controller/Payment/'.$medicine->booking_id)?>"><button>Pay Now</button></a>
        <?php
      }
    }
      ?>
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
$this->load->view('Patient/Layout/Patient_footer');
?>




