<?php
$this->load->view('Admin/Layout/Admin_header');
?>
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Change Password
                        </header>
                        <div class="panel-body">

<?php
foreach ($profile as $prfle) 

    

?>

                            <div class="position-center">
                                <form action="<?php echo base_url('index.php/Admin_controller/Admin_pwd_updte')?>" method="post"enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email"value="<?php echo $prfle->admin_email?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"
                                    value="<?php echo $prfle->admin_password?>" readonly>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">New Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="new_password">
                                </div>
                        
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                            

                        </div>
                    </section>

            </div>

<?php
$this->load->view('Admin/Layout/Admin_footer');
?>