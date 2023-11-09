<?php
$this->load->view('Admin/Layout/Admin_header');
?>
<div class="panel panel-default">
    <div class="panel-heading">
 <header class="panel-heading">
                            Payment Details
                        </header>
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
         <th> Card Name</th>
         <th> Card Number</th>
         <th> Patient Email</th>
         <th> Hospital Name</th>
         <th> Expire</th>
         <th> Amount </th>
         
         <th></th>
          </tr>
        </thead>
        <tbody>
        	<?php

foreach ($var as  $val) 
{
	

        	?>
        	
          <tr data-expanded="true">
            <td>1</td>
            <td><?php echo $val->card_name?></td>
            <td><?php echo $val->card_number?></td>
            <td><?php echo $val->patient_email?></td>
            <td><?php echo $val->h_name?></td>
            <td><?php echo $val->expire?></td>
            <td><?php echo $val->amount?></td>
           
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