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
               <br><br><br> 
                <h4>Create your account and Stay with us</h4>
              </div>
              <form action="code/register.php" method="post" class="contactform" name="register" id="register" onsubmit="return abc();">                                                 
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" name="name" placeholder="Name">
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true"  name="email" placeholder="Email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" id="password" name="password" required  placeholder="Password"> 
                </div>
                <div class="aa-single-field">
                  <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                  <input type="password" id="re_password" name="confirm_password" placeholder="Confirm Password" onchange="confirm_password()" required > 
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" onclick="confirm_password()" name="submit" >                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <?php require_once('footer.php');?>

<script type="text/javascript">
function abc(){
var pass=document.getElementById('password').value;
var re_pass=document.getElementById("re_password").value;

if(re_pass==pass){
return true;
}
else{
  alert('Confirm Password Not Match');
  return false;

}

}

</script>
