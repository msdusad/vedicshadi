<?php include("header.php");?>
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


  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Your Matching Peoples</h2>
          <span></span>
    <!--       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>      -->    
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">


     <?php
if(isset($_POST)){
$gender=$_POST['gender'];
$age_from=$_POST['age_from'];
$age_to=$_POST['age_to'];
$religion=$_POST['religion'];
$cast=$_POST['cast'];
$matirian_status=$_POST['matirian_status'];
$mother_toung=$_POST['mother_toung'];
}
      require_once('code/common.php');              
               $rt_data="select * from users left join fullprofile on  users.id=fullprofile.userid && gender like '%$gender%' || religion like '%$religion%' || cast like '%$cast%' || matirian_status like '%$matirian_status%' || mother_toung like '%$mother_toung%' ";
               $get=Common::FetchData($rt_data);

foreach ($get as $view) {

                ?>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                                  <img src="profile_pics/
<?php
if($view['profile_pic']!=''){
  echo $view["profile_pic"];
}
else{
  echo "profile_pics/avatar.png";
}
?>" alt="image" height="300px;">
                </a>
                <div class="aa-tag for-sale">
                 <!--  For Sale -->
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span><?php echo $view['gender'];?></span>
                    <span><?php echo $view['dob'];?></span>
                    <span><?php echo $view['religion'];?></span>
                    <span><?php echo $view['cast'];?> </span>
                     <span><?php echo $view['mother_toung'];?> </span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">About</a></h3>
                    <p><?php echo $view['describe_yourself'];?></p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                     <!--  $35000 -->
                    </span>
                    <a href="searched_view_profile.php?id=<?php echo $view['id'];?>" class="aa-secondary-btn">View Full Profile</a>
                  </div>
                </div>
              </article>
            </div>
<?php } ?>


           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest property -->


<?php include("footer.php");?>