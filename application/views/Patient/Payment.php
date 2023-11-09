<?php
$this->load->view('Patient/Layout/Patient_header');
?><br><br><br><br><br><br><br>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">



<?php
foreach ($vacc as  $var) 
{
	

?>

                   


                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">

                        	  <form action="<?php echo base_url('index.php/Patient_controller/Payment_display')?>" method="post"enctype="multipart/form-data">
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
 <input type="hidden" class=""name="booking_id" value="<?php echo $var->booking_id?>">
                             <input type="hidden" class=""name="patient_id" value="<?php echo $var->user_id?>">
                   
                       <h5> <input type="hidden" class=""name="hospital_id" value="<?php echo $var->hospital_id?>"></h5><br>
                       <h5> <input type="hidden" class=""name="hospital_mail" value="<?php echo $var->h_email_id ?>"></h5><br>
                        <h5> <input type="hidden" class=""name="patient_email" value="<?php echo $var->usr_email?>"></h5><br>

                       <!--  <h5> <input type="hidden" class=""name="hospital_mail" value="<?php echo $var->h_email_id?>"></h5><br> -->

                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div>
                            <form class="form" role="form" autocomplete="off">
                            	   
                                <div class="form-group">
                                    <label for="cc_name">Card Holder Name</label>
                                    <input type="text" class="form-control" name="card_name"  required="" placeholder="First_Name Last_Name">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number"name="card_number" required="" placeholder=" ">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Card Exp. Date</label>
                                    <div class="col-md-4">
                                    	<input type="text" class="form-control"  title="Three digits at back of your card" required=""name="expire" placeholder="mm/yy">
                                        
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required=""name ="cvc"placeholder="cvc">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                        <input type="text" class="form-control text-right" id="exampleInputAmount"name="amout" value="<?php echo $var->V_amount ?>">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>

<?php
}
?>


                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                   
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" style="width: 600px">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card cc payment -->
                
               