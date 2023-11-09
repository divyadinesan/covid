<?php 
$this->load->view('Patient/Layout/Patient_header');
?><br><br><br><br><br>

<!--//breadcrumb-->
 <!-- contact-form 2 -->
 <section class="w3l-contact-2 py-5" id="contact">
  <div class="container py-lg-4 py-md-3 py-2">
    <div class="title-content text-center">
     
      <h3 class="title-w3l mb-lg-4">Book Now</h3><br>

    </div>
    <div class="contact-grids d-grid mt-5 mx-lg-5">
      <div class="contact-left">
        <?php
        foreach ($vaccine as $row) 
        ?>
       <img src="<?php echo base_url('Asset/Hospital/vaccine/'.$row->V_img)?>" style="height: 300px;width: 500px;border-radius: 25px">
      </div>
      <?php 
       foreach ($user as  $usr) 
         ?>

     
      <div class="contact-right">
        <form action="<?php echo base_url('index.php/Patient_controller/Vaccination_booking')?>" method="post"enctype="multipart/form-data">
           <input type="hidden" name="user_email" value="<?php echo $usr->email?>">
      <input type="hidden" name="user_id"value="<?php echo $usr->id?>">
    <input type="hidden" name="vaccination_id"value="<?php echo $row->vaccination_id?>">
      <input type="hidden" name="hospital_id"value="<?php echo $row->hospital_id?>">
          <div class="input-grids">
            <label>Vaccine </label>
            <input type="text" name="Name" placeholder="Your Name*" class="contact-input"
              required=""value="<?php echo $row->V_name?>" />
               <label>Hospital </label>
            <input type="text" name="Name" placeholder="Your Name*" class="contact-input"
              required=""value="<?php echo $row->h_name?>" />
               <label>Booking Date</label>
            <input type="Date" name="Date" placeholder="Date" class="contact-input"
              required=""value=""> 
              


               <label>Booking Time</label>
             <select style="height: 55px;width: 500px;border-radius: 50px;padding-left: 15PX"name="Booking_time">
              <option>9:00AM - 10:30AM</option>
              <option>11:00AM - 12:30PM</option>
              <option>1:00PM - 2:30PM</option>
              <option>3:00PM - 4:30PM</option>
              <option>5:00PM - 6:30PM</option>
             </select><br><br>

          
          </div>
        
          <div class="submit-w3l-button text-lg-right">
              <button class="btn btn-style btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
</section>
  <section class="w3l-testimonials" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">
               
                <h3 class="title-w3l two text-center mb-sm-5 mb-4"><?php echo $row->V_name?></h3>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q><?php echo $row->V_description?></q>
                                    </blockquote>
                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>





<?php
$this->load->view('Patient/Layout/Patient_footer');
?>