<?php require_once('header.php');?>
  <!-- Start Proerty header  -->


  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="aa-property-header-inner">
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
  <!-- End Proerty header  -->

 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <div class="aa-contact-top-left">


                <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"></iframe>
              </div>
              <div class="aa-contact-top-right">

              <?php 
              if(isset($_GET['submit'])){
if($_GET['submit']=='success'){
 echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Message Submited Sucessfully</div>';

}
}
              ?>
             


                <h2>Contact</h2>
                <p>For more detail contact us on these details : </p>
                <ul class="contact-info-list">
                  <li> <i class="fa fa-phone"></i>  +91 7027481102 &nbsp;&nbsp;<i class="fa fa-whatsapp"></i>  7027471102 </li>
                  <li> <i class="fa fa-envelope-o"></i> info@vedicshadi.com</li>
                  <li> <i class="fa fa-map-marker"></i> Linepar, Bahadurgarh - 124507 (Hr.)</li>
                </ul>
              </div>
            </div>
            <div class="aa-contact-bottom">
<div class="aa-title">
                <h2>Our Members</h2>
                <span></span>
                <p>Contact Our Members that Nearby You  </p>
              </div>
            <?php
require_once('code/common.php');              
               $rt_data="select * from members ";
               $get=Common::FetchData($rt_data);

foreach ($get as $view) {

                ?>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                                  <img src="profile_pics/
<?php
if($view['pic']!=''){
  echo $view["pic"];
}
else{
  echo "profile_pics/avatar.png";
}
?>" alt="image" height="150px;">
                </a>
              
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>Name : <?php echo $view['name'];?></span><br>
                    <span>Email : <?php echo $view['email'];?></span><br>
                    <span> Phone Number : <?php echo $view['phone_number'];?></span><br>        
                  </div>
                  <div class="aa-properties-about">
                   
                    <p> Address : <?php echo $view['address'];?></p>                      
                  </div>
                <!--   <div class="aa-properties-detial">
                    <span class="aa-price">
                     <!--  $35000 
                    </span>
                  
                  </div> -->
                </div>
              </article>
            </div>
<?php } ?>

              <div class="aa-title">
              <br>
                <h2>Send Your Message</h2>
                <span></span>
                <p>Your email address will not be published. Required fields are marked <strong class="required">*</strong></p>
              </div>
              <div class="aa-contact-form">
                <form method="post" action="code/complete_profile.php" class="contactform">                  
                  <p class="comment-form-author">
                    <label for="author">Name <span class="required">*</span></label>
                    <input type="text" name="name" value="" required="required">
                  </p>
                  <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" aria-required="true" required="required">
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject">  
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment">Message</label>
                    <textarea name="message" cols="45" rows="8" aria-required="true" required="required"></textarea>
                  </p>                
                  <p class="form-submit">
                    <input type="submit" name="submit_contact_us" class="aa-browse-btn" value="Send Message">
                  </p>        
                </form>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </section>

  <?php require_once('footer.php');?>