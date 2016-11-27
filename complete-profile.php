<?php
 require_once('header.php');?> 

  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <br><br><br>
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <?php require_once('code/common.php');
                $user=$_SESSION['userid'];
               $rt_data="select * from users left join fullprofile on users.id='$user' && users.id=fullprofile.userid";
               $get=Common::FetchData($rt_data);

foreach ($get as $view) 

                ?>
                <h4>Complete Your Profile</h4>
              </div>
              <form action="code/complete_profile.php" method="post"  enctype="multipart/form-data" >                                                 
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" name="name" placeholder="Full Name" value="<?php echo $view['name'];?>" >
                </div>

                     <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" name="email" placeholder="Email" value="<?php echo $view['email'];?>">
                </div>


<div class="aa-single-field">
                  <label for="dob">Date of Brith <span class="required">*</span></label>
                  <input type="date" required="required" aria-required="true" name="dob" value="<?php echo $view['dob'];?>">

                  <label for="mobile_number">Mobile No.</label>
                  <input type="number" required="required" aria-required="true" name="mobile_number" placeholder="Mobile Number" value="<?php echo $view['mobile_number'];?>">
                </div>


                <div class="aa-single-field">
                  
                </div>



                <div class="aa-single-field">
                  <label for="profile_for"> Profile For </label>
               <select name="profile_for">

               <?php 

            if($view['profile_for']!=''){
              echo "<option selected>".$view['profile_for']."</option>";
            }


               ?>

                 <option>Self</option>
                  <option>Son</option>
                    <option>Daughter</option>
                      <option>Father </option>
                        <option>Mother</option>
                         <option>Other</option>
               </select>  

                  <label for="gender">Gender <span class="required">*</span></label>
                 

        


                   <select name="gender" required>



                           <?php 

            if($view['gender']!=''){
              echo "<option selected>".$view['gender']."</option>";
            }


               ?>

                 <option>Male</option>
                  <option>Female</option>
                    
               </select>
  <label for="religion">Religion </label>
                <select name="religion">
               
                   <?php 

            if($view['religion']!=''){
              echo "<option selected>".$view['religion']."</option>";
            }


               ?>

                  
<option>Hindu</option>
<option>Sikh</option>
<option>Urdu</option>
<option>Mulsim</option>
<option>Cristian</option>
                </select>



                <label for="cast">Vegitarian </label>
                  <select name="veg">
                 

                     <?php 

            if($view['veg']!=''){
              echo "<option selected>".$view['veg']."</option>";
            }


               ?>

                  
<option>No</option>
<option>Yes</option>

                </select>

                </div>


                <div class="aa-single-field">

                 <label for="profile_for">Matirian Status &nbsp;&nbsp;&nbsp; </label>

             
               <select name="matirian_status">

                     <?php 

            if($view['matirian_status']!=''){
              echo "<option selected>".$view['matirian_status']."</option>";
            }


               ?>

                 <option>Unmarried </option>
                  <option>Married</option>
                   <option>Divorsed</option>
                  
                     
               </select>  


                 
 <label for="mother_toung">Mother Toung </label>
                 <select name="mother_toung">    

                                <?php 

            if($view['mother_toung']!=''){
              echo "<option selected>".$view['mother_toung']."</option>";
            }


               ?>

<option>Mother Toung</option>
<option>Mother Toung</option>
<option>Mother Toung</option>
<option>Mother Toung</option>
<option>Mother Toung</option>
                </select>

 <label for="cast">Cast </label>
                 <select name="cast">

                    <?php 

            if($view['cast']!=''){
              echo "<option selected>".$view['cast']."</option>";
            }


               ?>

<option>Cast1</option>
<option>Cast2</option>
<option>Cast3</option>
<option>Cast4</option>
<option>Cast5</option>
                </select>


                </div>


         <div class="aa-single-field">
          
                  <label for="email">Profile Photo</label>
                  <input type="file"   name="profilepic" title="Profile Photo" accept="image/*">
<!-- image not selected hen old image name -->
<input type="hidden" name="picsd" value="<?php echo $view['profile_pic'];?>">

                </div>

<div class="aa-single-field">

  </div>

                     <div class="aa-single-field">
                  <label for="email">Height</label>
                  <input type="text"   name="height" placeholder="Height" value="<?php echo $view['height'];?>">
                </div>
     <div class="aa-single-field">
                  <label for="email">Body Color</label>
                  <input type="text"   name="body_color" placeholder="Body Color" value="<?php echo $view['body_color'];?>">
                </div>


   <div class="aa-single-field">
                  <label for="email">Family Details</label>
                  <input type="text"   name="father_name" placeholder="Father Name" value="<?php echo $view['father_name'];?>">
                   <input type="text"   name="mother_name" placeholder="Mother Name" value="<?php echo $view['mother_name'];?>">
                    <input type="text"   name="brother_sister" placeholder="Brother/Sister Name" value="<?php echo $view['brother_sister'];?>">
                </div>



<div class="aa-single-field">
                  <label for="email">Address </label>
                  <textarea type="text"  rows="10" cols="10" aria-required="true" name="address" placeholder="Address">
                  <?php echo $view['address'];?>

                  </textarea>
                </div>



<div class="aa-single-field">
                  <label for="email">Education Qualification </label>
                  <textarea type="text"  rows="10" cols="10" aria-required="true" name="education" placeholder="Educational Details">
                    <?php echo $view['education'];?>

                  </textarea>
                </div>


<div class="aa-single-field">
                  <label for="email">Job Profile With Income </label>
                  <textarea type="text"  rows="10" cols="10" aria-required="true" name="job_profile" placeholder="Job Details and Yearly Income">
                    
<?php echo $view['job_profile'];?>

                  </textarea>
                </div>


<div class="aa-single-field">
                  <label for="email">Other Details </label>
                  <textarea type="text"  rows="10" cols="10" aria-required="true" name="other_details" placeholder="Other Detils">
                    
<?php echo $view['other_details'];?>

                  </textarea>
                </div>


<div class="aa-single-field">
                  <label for="email">Describe Yourself </label>
                  <textarea type="text"  rows="10" cols="10" aria-required="true" name="describe_yourself" placeholder="Write About Yourself?">
                    
                    <?php echo $view['describe_yourself'];?>
                  </textarea>
                </div>



                <div class="aa-single-submit">
                  <input type="submit" value="Save"  name="complete_profile" >                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 


  <?php require_once('footer.php');?>

