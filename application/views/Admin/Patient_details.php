<?php
$this->load->view('Admin/Layout/Admin_header');
?>
<div class="panel panel-default">
    <div class="panel-heading">
  
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
         <th>Patient img</th>
          </tr>
        </thead>
        <tbody>
        	<?php

     foreach ($mem as  $vari) 
     {
     	
     

        	?>
         
          <tr data-expanded="true">
            <td>1</td>
            <td><?php echo $vari->name?></td>
            <td><?php echo $vari->email?></td>
            <td><?php echo $vari->password?></td>
            <td><?php echo $vari->phone_number?></td>
            <td><?php echo $vari->city?></td>
            <td><?php echo $vari->address?></td>
            <td><img src="<?php echo base_url('Asset/Patient/p_image/'.$vari->Patient_img)?>"style="width: 200px;height: 180px"></td>
            
          </tr>
          <?php

}
          ?>
         
         
        </tbody>
      </table>
    </div>
  </div>


 



<?php
$this->load->view('Admin/Layout/Admin_footer');
?>