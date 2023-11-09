<?php
$this->load->view('Admin/Layout/Admin_header.php');
?>
<div class="panel panel-default">
    <div class="panel-heading">
    Manage Hospital
    </div>
    <div>
      <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>



<div style="overflow-x:auto;">
  <table>
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
            <th data-breakpoints="xs">Approve</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Reject</th>
          </tr>
   
          <?php
         foreach ($hospital as  $hos) 
         {
          
         

            ?>
          <tr data-expanded="true">
            <td>1</td>
            <td><?php echo $hos->h_name?></td>
            <td><?php echo $hos->h_email_id?></td>
            <td><?php echo $hos->h_password?></td>
            <td><?php echo $hos->h_phone_number?></td>
            <td><?php echo $hos->h_city?></td>
            <td><?php echo $hos->h_address?></td>
            <td><?php echo $hos->h_exp?></td>
            <td><img src="<?php echo base_url('Asset/Admin/hospital/'.$hos->h_image)?>"style="width:200px;height:180px"></td>
            <td><iframe src="<?php echo base_url('Asset/Admin/certificate/'.$hos->h_exp_certificate)?>" style="width:200px; height:180px;" frameborder="0"></iframe></td>
            <td><?php echo $hos->h_status?></td>
            <td><a href="<?php echo base_url('index.php/Admin_controller/Approve_hospital_request/'.$hos->hosipital_id)?>"><img src="<?php echo base_url('Asset/Admin/images/Approve.png')?>"style="width:90px;height:90px"></a></td>
            <td><a href="<?php echo base_url('index.php/Admin_controller/Reject_hospital/'.$hos->hosipital_id)?>"><img src="<?php echo base_url('Asset/Admin/images/Reject.png')?>"style="width:90px;height:90px"></td>
          </tr>
          <?php
}

          ?>
    </table>
</div>

</body>
</html>

     

          	
           
         	
         

          
      </table>
    </div>
  </div>
<br>







<?php
$this->load->view('Admin/Layout/Admin_footer.php');
?>