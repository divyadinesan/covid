<?php
$this->load->view('Admin/Layout/Admin_header');
?>

<div class="panel panel-default">
    <div class="panel-heading">
    Admin Added Hospital
    </div>
    <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
         <th data-breakpoints="xs">ID</th>
         <th> Name </th>
         <th> Email</th>
         <th> Password </th>
         <th> Phone</th>
         <th> City / Town</th>
         <th> Address</th>
         <th> Experience</th>
         <th>Hospital Image</th>
         <th>Hospital Certificate</th>
         <th>Hospital Status</th>
         <th>Edit</th>
         <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $t=1;
           foreach ($med as  $hosi)
            {
             
           
          ?>
          <tr data-expanded="true">
            <td><?php echo $t?></td>
            <td><?php echo $hosi->h_name?></td>
            <td><?php echo $hosi->h_email_id?></td>
            <td><?php echo $hosi->h_password?></td>
            <td><?php echo $hosi->h_phone_number?></td>
            <td><?php echo $hosi->h_city?></td>
            <td><?php echo $hosi->h_address?></td>
            <td><?php echo $hosi->h_exp?></td>
            <td><img src="<?php echo base_url('Asset/Admin/Hospital/'.$hosi->h_image)?>"style="width: 200px;height: 180px"></td>
             <td><iframe src="<?php echo base_url('Asset/Admin/certificate/'.$hosi->h_exp_certificate)?>" style="width:200px; height:180px;" frameborder="0"></iframe></td>
             <td><?php echo $hosi->h_type?></td>
             <td><a href="<?php echo base_url('index.php/Admin_controller/Edit_hospital/'.$hosi->hosipital_id)?>">
              <img src="<?php echo base_url('Asset/Admin/images/Edit.png')?>"style="width: 60px;height: 60px"></a></td>
             <td><a href="<?php echo base_url('index.php/Admin_controller/delete_hospital/'.$hosi->hosipital_id)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"style="width:60px;height:60px"></a></td>
          </tr>
          <?php
$t++;

}
          ?>
         
        </tbody>
      </table>
    </div>
  </div>
<br><br><br>
<div class="panel panel-default">
    <div class="panel-heading">
      Registered Hospital
    </div>
    <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
         <th data-breakpoints="xs">ID</th>
         <th> Name </th>
         <th> Email</th>
         <th> Password </th>
         <th> Phone</th>
         <th> City / Town</th>
         <th> Address</th>
         <th> Experience</th>
         <th>Hospital Image</th>
         <th>Hospital Certificate</th>
         <th>Hospital Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
           $k=1;
           foreach ($vac as  $hosip)
            {
             
           
          ?>
          <tr data-expanded="true">
            <td><?php echo $k?></td>
            <td><?php echo $hosip->h_name?></td>
            <td><?php echo $hosip->h_email_id?></td>
            <td><?php echo $hosip->h_password?></td>
            <td><?php echo $hosip->h_phone_number?></td>
            <td><?php echo $hosip->h_city?></td>
            <td><?php echo $hosip->h_address?></td>
            <td><?php echo $hosip->h_exp?></td>
            <td><img src="<?php echo base_url('Asset/Admin/Hospital/'.$hosip->h_image)?>"style="width: 200px;height: 180px"></td>
             <td><iframe src="<?php echo base_url('Asset/Admin/certificate/'.$hosip->h_exp_certificate)?>" style="width:200px; height:180px;" frameborder="0"></iframe></td>
             <td><?php echo $hosip->h_status?></td>
          </tr>
          <?php

$k++;
}
          ?>
         
        </tbody>
      </table>
    </div>
  </div>
<br>



<?php
$this->load->view('Admin/Layout/Admin_footer');
?>