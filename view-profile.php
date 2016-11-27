<?php include("header.php");?>
<style type="text/css">
  
  #pid{
    border:1px solid black;
    padding: 5px;
  }
</style>
  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <!--   <div class="aa-property-header-inner">
            <h2>Contact</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">Contact</li>
          </ol>
          </div> -->
        </div>
      </div>
    </div>
  </section> 
  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">

                    <?php require_once('code/common.php');
                $user=$_SESSION['userid'];
               $rt_data="select * from users left join fullprofile on users.id='$user' && users.id=fullprofile.userid";
               $get=Common::FetchData($rt_data);

foreach ($get as $view) 

                ?>

                <div class="aa-about-us-left">
                  <img src="profile_pics/
<?php
if($view['profile_pic']!=''){
  echo $view["profile_pic"];
}
else{
  echo "profile_pics/avatar.png";
}
?>" alt="image" height="500px;">
                </div>
              </div>
              <div class="col-md-7" >
                <div class="aa-about-us-right" >
                  <div class="aa-title" >
                    <a href="complete-profile.php" class="btn btn-info" style="float:right">Edit Profile</a>
                    <h2><?php echo $view['name'];?></h2>
                  </div>

                  <div class="col-md-6" >
                    <p id="pid" ><b>Email - </b> <?php echo $view['email'];?></p>
                    <p id="pid"><b>Date of Brith - </b> <?php echo $view['dob'];?></p>
                    <p id="pid"><b>Mobile No. - </b> <?php echo $view['mobile_number'];?></p>
                    <p id="pid"><b>Mother Toung - </b> <?php echo $view['mother_toung'];?></p>
                    <p id="pid"><b>Cast - </b> <?php echo $view['cast'];?></p>
                    <p id="pid"><b>Height - </b> <?php echo $view['height'];?></p>
                    <p id="pid"><b>Body Color - </b> <?php echo $view['body_color'];?></p>

                       
</div>

<div class="col-md-6">
   <p id="pid"><b>Profile For  - </b> <?php echo $view['profile_for'];?></p>
   <p id="pid"><b>Gender - </b> <?php echo $view['gender'];?></p>
   <p id="pid"><b>Religion - </b> <?php echo $view['religion'];?></p>
   <p id="pid"><b>Vegitarian - </b> <?php echo $view['veg'];?></p>   
   <p id="pid"><b>Matirian Status - </b> <?php echo $view['matirian_status'];?></p>

   <p ><b>Family Details  </b> </p>
<p id="pid"><b>Father Name - </b> <?php echo $view['father_name'];?></p>
<p id="pid"><b>Mother Name - </b> <?php echo $view['mother_name'];?></p>
<p id="pid"><b>Brother/Sisters - </b> <?php echo $view['brother_sister'];?></p>
</div>
<br>
 <p id="pid" style="border:0px;"><b>Address - </b> <?php echo $view['address'];?></p>
  <p id="pid"><b>Education Qualification - </b> <?php echo $view['education'];?></p>

    <p id="pid"><b>Job Profile With Income - </b> <?php echo $view['job_profile'];?></p>
        <p id="pid"><b>Other Details - </b> <?php echo $view['other_details'];?></p>
            <p id="pid"><b>Describe Yourself - </b> <?php echo $view['describe_yourself'];?></p>

                               
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->

<?php include("footer.php");?>