<?php
$this->load->view('Admin/Layout/Admin_header');
?>
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Hospital
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            	<?php
                               
foreach ($cov as  $medic) {
	# code...
}
                            	?>
                                <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name"value="<?php echo $medic->h_name?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Id</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email"value="<?php echo $medic->h_email_id?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"value="<?php echo $medic->h_password?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="phone"value="<?php echo $medic->h_phone_number?>">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">City/Town</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="c/t"value="<?php echo $medic->h_city?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Address"value="<?php echo $medic->h_address?>">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Experience</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="experience"value="<?php echo $medic->h_exp?>">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Experience Certificate</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password" name="certificate">  <iframe src="<?php echo base_url('Asset/Admin/certificate/'.$hosi->h_exp_certificate)?>" style="width:200px; height:180px;" frameborder="0"></iframe>
                                </div> -->
                                <label for="exampleInputPassword1">Hospital Image</label><br><br>                                <img src="<?php echo base_url('Asset/Admin/Hospital/'.$medic->h_image)?>" style="height: 100px;width: 200px"><br>
                                <div class="form-group"><br>
                                    <label for="exampleInputPassword1">Upload New Hospital Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password" name="image">
                                </div>
                                 <br>
                               
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

            <br>













<?php
$this->load->view('Admin/Layout/Admin_footer');
?>


