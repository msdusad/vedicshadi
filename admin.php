<?php require_once('header.php');?>
   <style type="text/css">
table{
	border: 2px solid black;
	padding: 3px;
}
tr{
	border: 2px solid black;
	padding: 3px;
}

thead th{
	border: 2px solid black;
	padding: 3px;
}

tr td{
	border: 2px solid black;
	padding: 3px;
}

   </style> 
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <br><br><br><br><br>
          <div class="aa-signin-area" style="width:150%;margin-left:-300px;">
            <div class="aa-signin-form" >
              <div class="aa-signin-form-title" >
              
              <table>
              	
<thead>
<th>ID</th>
<th> Name</th>	
<th> Email</th>	
<th> DOB</th>	
<th> Mobile Number</th>	
<th> Gender</th>	
<th> Profile For</th>	

<th> Religion</th>
	<th> Cast</th>	
	<th> Mother Tounge</th>	



</thead>
<?php

$rt_data="select * from users left join fullprofile on users.id=fullprofile.userid";
               $get=Common::FetchData($rt_data);

foreach ($get as $view) {
?>
<tr>
<td><?php echo $view['id'];?></td>
<td><?php echo $view['name'];?></td>
<td><?php echo $view['email'];?></td>
<td><?php echo $view['dob'];?></td>
<td><?php echo $view['mobile_number'];?></td>
<td><?php echo $view['gender'];?></td>
<td><?php echo $view['profile_for'];?></td>
<td><?php echo $view['religion'];?></td>
<td><?php echo $view['cast'];?></td>
<td><?php echo $view['mother_toung'];?></td>
</tr>
<?php
}
?>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php require_once('footer.php');?>