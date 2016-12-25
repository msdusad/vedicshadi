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
                       <?php 
              if(isset($_GET['submit'])){
if($_GET['submit']=='success'){
 echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Member Registred Sucessfully.</div>';

}
}
              ?>
                <h4>Membership Account Form </h4>
              </div>
          <form action="code/complete_profile.php" method="post" class="contactform" name="register" id="register" enctype="multipart/form-data">                                                 
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" name="name" placeholder="Name">
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true"  name="email" placeholder="Email">
                </div>
                <div class="aa-single-field">
                  <label for="phone_number">Phone Number <span class="required">*</span></label>
                  <input type="text"  name="phone_number" required  placeholder="Phone Number"> 
                </div>
                <div class="aa-single-field">
                  <label for="address">Address <span class="required">*</span></label>
                  <textarea type="text" id="address" name="address" placeholder="Address" rows="10" cols="15" required > </textarea>
                </div>

              <div class="aa-single-field">
                  <label for="adahar_number">Adahar Card Number <span class="required">*</span></label>
                  <input type="text" id="adahar_number" name="adahar_number" placeholder=" Adahar Card Number" required > 
                </div>  

                  <div class="aa-single-field">
                  <label for="confirm-password">Photo <span class="required">*</span></label>
                  <input type="file"  name="member_pic" placeholder="Upload Photo"  accept="image/*"  required > 
                </div>

      <div class="aa-single-field">
      <input type="checkbox"  name="term_condition"   checked > 
                  <label for="confirm-password">Accept Term & Conditions <span class="required">*</span></label>
                  
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account"  name="member_submit" >                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <?php require_once('footer.php');?>