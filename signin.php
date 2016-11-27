<?php require_once('header.php');?>
    
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <br><br><br>
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">

                <h4>Sign in to your account</h4>
              </div>
  
              <form action="code/login.php" method="post" class="contactform">                                                 
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="username">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password"> 
                </div>
                <div class="aa-single-field">
                <label>
                  <input type="checkbox"> Remember me
                </label>                                                          
                </div> 
                <div class="aa-single-submit">
                  <input type="submit" name="Login" value="Login" class="aa-browse-btn" name="submit">  
                  <p>Don't Have A Account Yet? <a href="register.php">CREATE NOW!</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php require_once('footer.php');?>