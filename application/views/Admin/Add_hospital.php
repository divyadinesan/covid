<?php
$this->load->view('Admin/Layout/Admin_header');
?>
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Hospital
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php  echo base_url('index.php/Admin_controller/hospital_insert')?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Id</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="phone">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">City/Town</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="c/t">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Address">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Experience</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="experience">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Experience Certificate</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password" name="certificate">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hospital Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password" name="image">
                                </div>
                                 
                               
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