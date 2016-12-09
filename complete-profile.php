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
                  <label for="profile_for"> Profile For </label>
               <select name="profile_for">

               <?php 

            if($view['profile_for']!=''){
              echo "<option selected>".$view['profile_for']."</option>";
            }


               ?>

                 <option value="Self" label="Self">Self</option>
    <option value="Son" label="Son">Son</option>
    <option value="Daughter" label="Daughter">Daughter</option>
    <option value="Brother" label="Brother">Brother</option>
    <option value="Sister" label="Sister">Sister</option>
     <option value="Friend" label="Friend">Sister</option>
      <option value="Other" label="Other">Other</option>
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

                      <option value="Hindu" label="Hindu">Hindu</option>
    <option value="Muslim" label="Muslim">Muslim</option>
    <option value="Christian" label="Christian">Christian</option>
    <option value="Sikh" label="Sikh">Sikh</option>
    <option value="Parsi" label="Parsi">Parsi</option>
    <option value="Jain" label="Jain">Jain</option>
    <option value="Buddhist" label="Buddhist">Buddhist</option>
    <option value="Jewish" label="Jewish">Jewish</option>
    <option value="No Religion" label="No Religion">No Religion</option>
    <option value="Spiritual - not religious" label="Spiritual">Spiritual</option>
    <option value="Other" label="Other">Other</option>
                </select>



           
                </div>


               <div class="aa-single-field">

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

<label for="cast">Cast </label>
                 <select name="cast">

                    <?php 

            if($view['cast']!=''){
              echo "<option selected>".$view['cast']."</option>";
            }


               ?>
<optgroup id="caste-optgroup-Frequently Used" label="Frequently Used">
    <option value="Baniya" label="Baniya">Baniya</option>
    <option value="Brahmin - Danua" label="Brahmin - Danua">Brahmin - Danua</option>
    <option value="Brahmin - Halua" label="Brahmin - Halua">Brahmin - Halua</option>
    <option value="Brahmin - Other" label="Brahmin - Other">Brahmin - Other</option>
    <option value="Brahmin - Panda" label="Brahmin - Panda">Brahmin - Panda</option>
    <option value="Chasa" label="Chasa">Chasa</option>
    <option value="Dhoba" label="Dhoba">Dhoba</option>
    <option value="Goud" label="Goud">Goud</option>
    <option value="Gudia" label="Gudia">Gudia</option>
    <option value="Kaibarta" label="Kaibarta">Kaibarta</option>
    <option value="Karana" label="Karana">Karana</option>
    <option value="Khandayat" label="Khandayat">Khandayat</option>
    <option value="Kshatriya" label="Kshatriya">Kshatriya</option>
    <option value="Sahu" label="Sahu">Sahu</option>
    <option value="Scheduled Caste (SC)" label="Scheduled Caste (SC)">Scheduled Caste (SC)</option>
    <option value="Scheduled Tribe (ST)" label="Scheduled Tribe (ST)">Scheduled Tribe (ST)</option>
    <option value="Sundhi" label="Sundhi">Sundhi</option>
    <option value="Tanti" label="Tanti">Tanti</option>
    <option value="Teli" label="Teli">Teli</option>
    </optgroup>
    <optgroup id="caste-optgroup-All Communities" label="All Communities">
    <option value="96K Kokanastha" label="96K Kokanastha">96K Kokanastha</option>
    <option value="Adi Andhra" label="Adi Andhra">Adi Andhra</option>
    <option value="Adi Dravida" label="Adi Dravida">Adi Dravida</option>
    <option value="Adi Karnataka" label="Adi Karnataka">Adi Karnataka</option>
    <option value="Agarwal" label="Agarwal">Agarwal</option>
    <option value="Agnikula Kshatriya" label="Agnikula Kshatriya">Agnikula Kshatriya</option>
    <option value="Agri" label="Agri">Agri</option>
    <option value="Ahom" label="Ahom">Ahom</option>
    <option value="Ambalavasi" label="Ambalavasi">Ambalavasi</option>
    <option value="Arekatica" label="Arekatica">Arekatica</option>
    <option value="Arora" label="Arora">Arora</option>
    <option value="Arunthathiyar" label="Arunthathiyar">Arunthathiyar</option>
    <option value="Arya Vysya" label="Arya Vysya">Arya Vysya</option>
    <option value="Aryasamaj" label="Aryasamaj">Aryasamaj</option>
    <option value="Ayyaraka" label="Ayyaraka">Ayyaraka</option>
    <option value="Badaga" label="Badaga">Badaga</option>
    <option value="Baghel/Pal/Gaderiya" label="Baghel/Pal/Gaderiya">Baghel/Pal/Gaderiya</option>
    <option value="Bahi" label="Bahi">Bahi</option>
    <option value="Baidya" label="Baidya">Baidya</option>
    <option value="Baishnab" label="Baishnab">Baishnab</option>
    <option value="Baishya" label="Baishya">Baishya</option>
    <option value="Bajantri" label="Bajantri">Bajantri</option>
    <option value="Balija" label="Balija">Balija</option>
    <option value="Balija - Naidu" label="Balija - Naidu">Balija - Naidu</option>
    <option value="Banik" label="Banik">Banik</option>
    <option value="Baniya" label="Baniya">Baniya</option>
    <option value="Bari" label="Bari">Bari</option>
    <option value="Barujibi" label="Barujibi">Barujibi</option>
    <option value="Besta" label="Besta">Besta</option>
    <option value="Bhandari" label="Bhandari">Bhandari</option>
    <option value="Bhatia" label="Bhatia">Bhatia</option>
    <option value="Bhatraju" label="Bhatraju">Bhatraju</option>
    <option value="Bhavsar" label="Bhavsar">Bhavsar</option>
    <option value="Bhovi" label="Bhovi">Bhovi</option>
    <option value="Billava" label="Billava">Billava</option>
    <option value="Boya/Nayak/Naik" label="Boya/Nayak/Naik">Boya/Nayak/Naik</option>
    <option value="Boyer" label="Boyer">Boyer</option>
    <option value="Brahmbatt" label="Brahmbatt">Brahmbatt</option>
    <option value="Brahmin - Anavil" label="Brahmin - Anavil">Brahmin - Anavil</option>
    <option value="Brahmin - Audichya" label="Brahmin - Audichya">Brahmin - Audichya</option>
    <option value="Brahmin - Barendra" label="Brahmin - Barendra">Brahmin - Barendra</option>
    <option value="Brahmin - Bhatt" label="Brahmin - Bhatt">Brahmin - Bhatt</option>
    <option value="Brahmin - Bhumihar" label="Brahmin - Bhumihar">Brahmin - Bhumihar</option>
    <option value="Brahmin - Brahmbhatt" label="Brahmin - Brahmbhatt">Brahmin - Brahmbhatt</option>
    <option value="Brahmin - Daivadnya" label="Brahmin - Daivadnya">Brahmin - Daivadnya</option>
    <option value="Brahmin - Danua" label="Brahmin - Danua">Brahmin - Danua</option>
    <option value="Brahmin - Deshastha" label="Brahmin - Deshastha">Brahmin - Deshastha</option>
    <option value="Brahmin - Dhiman" label="Brahmin - Dhiman">Brahmin - Dhiman</option>
    <option value="Brahmin - Dravida" label="Brahmin - Dravida">Brahmin - Dravida</option>
    <option value="Brahmin - Embrandiri" label="Brahmin - Embrandiri">Brahmin - Embrandiri</option>
    <option value="Brahmin - Goswami" label="Brahmin - Goswami">Brahmin - Goswami</option>
    <option value="Brahmin - Gour" label="Brahmin - Gour">Brahmin - Gour</option>
    <option value="Brahmin - Gowd Saraswat" label="Brahmin - Gowd Saraswat">Brahmin - Gowd Saraswat</option>
    <option value="Brahmin - Gurukkal" label="Brahmin - Gurukkal">Brahmin - Gurukkal</option>
    <option value="Brahmin - Halua" label="Brahmin - Halua">Brahmin - Halua</option>
    <option value="Brahmin - Havyaka" label="Brahmin - Havyaka">Brahmin - Havyaka</option>
    <option value="Brahmin - Himachali" label="Brahmin - Himachali">Brahmin - Himachali</option>
    <option value="Brahmin - Hoysala" label="Brahmin - Hoysala">Brahmin - Hoysala</option>
    <option value="Brahmin - Iyengar" label="Brahmin - Iyengar">Brahmin - Iyengar</option>
    <option value="Brahmin - Iyer" label="Brahmin - Iyer">Brahmin - Iyer</option>
    <option value="Brahmin - Jhadua" label="Brahmin - Jhadua">Brahmin - Jhadua</option>
    <option value="Brahmin - Jhijhotiya" label="Brahmin - Jhijhotiya">Brahmin - Jhijhotiya</option>
    <option value="Brahmin - Kanyakubja" label="Brahmin - Kanyakubja">Brahmin - Kanyakubja</option>
    <option value="Brahmin - Karhade" label="Brahmin - Karhade">Brahmin - Karhade</option>
    <option value="Brahmin - Kashmiri Pandit" label="Brahmin - Kashmiri Pandit">Brahmin - Kashmiri Pandit</option>
    <option value="Brahmin - Kokanastha" label="Brahmin - Kokanastha">Brahmin - Kokanastha</option>
    <option value="Brahmin - Kota" label="Brahmin - Kota">Brahmin - Kota</option>
    <option value="Brahmin - Kulin" label="Brahmin - Kulin">Brahmin - Kulin</option>
    <option value="Brahmin - Kumaoni" label="Brahmin - Kumaoni">Brahmin - Kumaoni</option>
    <option value="Brahmin - Madhwa" label="Brahmin - Madhwa">Brahmin - Madhwa</option>
    <option value="Brahmin - Maithili" label="Brahmin - Maithili">Brahmin - Maithili</option>
    <option value="Brahmin - Modh" label="Brahmin - Modh">Brahmin - Modh</option>
    <option value="Brahmin - Mohyal" label="Brahmin - Mohyal">Brahmin - Mohyal</option>
    <option value="Brahmin - Nagar" label="Brahmin - Nagar">Brahmin - Nagar</option>
    <option value="Brahmin - Namboodiri" label="Brahmin - Namboodiri">Brahmin - Namboodiri</option>
    <option value="Brahmin - Niyogi" label="Brahmin - Niyogi">Brahmin - Niyogi</option>
    <option value="Brahmin - Niyogi Nandavariki" label="Brahmin - Niyogi Nandavariki">Brahmin - Niyogi Nandavariki</option>
    <option value="Brahmin - Other" label="Brahmin - Other">Brahmin - Other</option>
    <option value="Brahmin - Paliwal" label="Brahmin - Paliwal">Brahmin - Paliwal</option>
    <option value="Brahmin - Panda" label="Brahmin - Panda">Brahmin - Panda</option>
    <option value="Brahmin - Pareek" label="Brahmin - Pareek">Brahmin - Pareek</option>
    <option value="Brahmin - Pushkarna" label="Brahmin - Pushkarna">Brahmin - Pushkarna</option>
    <option value="Brahmin - Rarhi" label="Brahmin - Rarhi">Brahmin - Rarhi</option>
    <option value="Brahmin - Rudraj" label="Brahmin - Rudraj">Brahmin - Rudraj</option>
    <option value="Brahmin - Sakaldwipi" label="Brahmin - Sakaldwipi">Brahmin - Sakaldwipi</option>
    <option value="Brahmin - Sanadya" label="Brahmin - Sanadya">Brahmin - Sanadya</option>
    <option value="Brahmin - Sanketi" label="Brahmin - Sanketi">Brahmin - Sanketi</option>
    <option value="Brahmin - Saraswat" label="Brahmin - Saraswat">Brahmin - Saraswat</option>
    <option value="Brahmin - Saryuparin" label="Brahmin - Saryuparin">Brahmin - Saryuparin</option>
    <option value="Brahmin - Shivhalli" label="Brahmin - Shivhalli">Brahmin - Shivhalli</option>
    <option value="Brahmin - Shrimali" label="Brahmin - Shrimali">Brahmin - Shrimali</option>
    <option value="Brahmin - Smartha" label="Brahmin - Smartha">Brahmin - Smartha</option>
    <option value="Brahmin - Sri Vaishnava" label="Brahmin - Sri Vaishnava">Brahmin - Sri Vaishnava</option>
    <option value="Brahmin - Stanika" label="Brahmin - Stanika">Brahmin - Stanika</option>
    <option value="Brahmin - Tyagi" label="Brahmin - Tyagi">Brahmin - Tyagi</option>
    <option value="Brahmin - Vaidiki" label="Brahmin - Vaidiki">Brahmin - Vaidiki</option>
    <option value="Brahmin - Vaikhanasa" label="Brahmin - Vaikhanasa">Brahmin - Vaikhanasa</option>
    <option value="Brahmin - Velanadu" label="Brahmin - Velanadu">Brahmin - Velanadu</option>
    <option value="Brahmin - Viswabrahmin" label="Brahmin - Viswabrahmin">Brahmin - Viswabrahmin</option>
    <option value="Brahmin - Vyas" label="Brahmin - Vyas">Brahmin - Vyas</option>
    <option value="Brahmo" label="Brahmo">Brahmo</option>
    <option value="Buddar" label="Buddar">Buddar</option>
    <option value="Bunt (Shetty)" label="Bunt (Shetty)">Bunt (Shetty)</option>
    <option value="CKP" label="CKP">CKP</option>
    <option value="Chalawadi Holeya" label="Chalawadi Holeya">Chalawadi Holeya</option>
    <option value="Chambhar" label="Chambhar">Chambhar</option>
    <option value="Chandravanshi Kahar" label="Chandravanshi Kahar">Chandravanshi Kahar</option>
    <option value="Chasa" label="Chasa">Chasa</option>
    <option value="Chattada Sri Vaishnava" label="Chattada Sri Vaishnava">Chattada Sri Vaishnava</option>
    <option value="Chaudary" label="Chaudary">Chaudary</option>
    <option value="Chaurasia" label="Chaurasia">Chaurasia</option>
    <option value="Chekkala - Nair" label="Chekkala - Nair">Chekkala - Nair</option>
    <option value="Chennadasar" label="Chennadasar">Chennadasar</option>
    <option value="Cheramar" label="Cheramar">Cheramar</option>
    <option value="Chettiar" label="Chettiar">Chettiar</option>
    <option value="Chhetri" label="Chhetri">Chhetri</option>
    <option value="Chippolu/Mera" label="Chippolu/Mera">Chippolu/Mera</option>
    <option value="Devadiga" label="Devadiga">Devadiga</option>
    <option value="Devanga" label="Devanga">Devanga</option>
    <option value="Devar/Thevar/Mukkulathor" label="Devar/Thevar/Mukkulathor">Devar/Thevar/Mukkulathor</option>
    <option value="Devendra Kula Vellalar" label="Devendra Kula Vellalar">Devendra Kula Vellalar</option>
    <option value="Dhangar" label="Dhangar">Dhangar</option>
    <option value="Dheevara" label="Dheevara">Dheevara</option>
    <option value="Dhiman" label="Dhiman">Dhiman</option>
    <option value="Dhoba" label="Dhoba">Dhoba</option>
    <option value="Digambar" label="Digambar">Digambar</option>
    <option value="Dommala" label="Dommala">Dommala</option>
    <option value="Ediga" label="Ediga">Ediga</option>
    <option value="Ezhava" label="Ezhava">Ezhava</option>
    <option value="Ezhuthachan" label="Ezhuthachan">Ezhuthachan</option>
    <option value="Gabit" label="Gabit">Gabit</option>
    <option value="Ganakar" label="Ganakar">Ganakar</option>
    <option value="Gandla" label="Gandla">Gandla</option>
    <option value="Ganiga" label="Ganiga">Ganiga</option>
    <option value="Gatti" label="Gatti">Gatti</option>
    <option value="Gavali" label="Gavali">Gavali</option>
    <option value="Gavara" label="Gavara">Gavara</option>
    <option value="Ghumar" label="Ghumar">Ghumar</option>
    <option value="Goala" label="Goala">Goala</option>
    <option value="Goswami" label="Goswami">Goswami</option>
    <option value="Goud" label="Goud">Goud</option>
    <option value="Goud Saraswat Brahmin (GSB)" label="Goud Saraswat Brahmin (GSB)">Goud Saraswat Brahmin (GSB)</option>
    <option value="Gounder" label="Gounder">Gounder</option>
    <option value="Gowda" label="Gowda">Gowda</option>
    <option value="Gramani" label="Gramani">Gramani</option>
    <option value="Gudia" label="Gudia">Gudia</option>
    <option value="Gujjar" label="Gujjar">Gujjar</option>
    <option value="Gupta" label="Gupta">Gupta</option>
    <option value="Guptan" label="Guptan">Guptan</option>
    <option value="Gurjar" label="Gurjar">Gurjar</option>
    <option value="Hegde" label="Hegde">Hegde</option>
    <option value="Helava" label="Helava">Helava</option>
    <option value="Hugar (Jeer)" label="Hugar (Jeer)">Hugar (Jeer)</option>
    <option value="Intercaste" label="Intercaste">Intercaste</option>
    <option value="Jaalari" label="Jaalari">Jaalari</option>
    <option value="Jaiswal" label="Jaiswal">Jaiswal</option>
    <option value="Jandra" label="Jandra">Jandra</option>
    <option value="Jangam" label="Jangam">Jangam</option>
    <option value="Jat" label="Jat">Jat</option>
    <option value="Jatav" label="Jatav">Jatav</option>
    <option value="Jetty Malla" label="Jetty Malla">Jetty Malla</option>
    <option value="Kachara" label="Kachara">Kachara</option>
    <option value="Kaibarta" label="Kaibarta">Kaibarta</option>
    <option value="Kakkalan" label="Kakkalan">Kakkalan</option>
    <option value="Kalar" label="Kalar">Kalar</option>
    <option value="Kalinga" label="Kalinga">Kalinga</option>
    <option value="Kalinga Vysya" label="Kalinga Vysya">Kalinga Vysya</option>
    <option value="Kalita" label="Kalita">Kalita</option>
    <option value="Kalwar" label="Kalwar">Kalwar</option>
    <option value="Kamboj" label="Kamboj">Kamboj</option>
    <option value="Kamma" label="Kamma">Kamma</option>
    <option value="Kammala" label="Kammala">Kammala</option>
    <option value="Kaniyan" label="Kaniyan">Kaniyan</option>
    <option value="Kansari" label="Kansari">Kansari</option>
    <option value="Kapu" label="Kapu">Kapu</option>
    <option value="Kapu Naidu" label="Kapu Naidu">Kapu Naidu</option>
    <option value="Karana" label="Karana">Karana</option>
    <option value="Karmakar" label="Karmakar">Karmakar</option>
    <option value="Kartha" label="Kartha">Kartha</option>
    <option value="Karuneegar" label="Karuneegar">Karuneegar</option>
    <option value="Kasar" label="Kasar">Kasar</option>
    <option value="Kashyap" label="Kashyap">Kashyap</option>
    <option value="Kavuthiyya/Ezhavathy" label="Kavuthiyya/Ezhavathy">Kavuthiyya/Ezhavathy</option>
    <option value="Kayastha" label="Kayastha">Kayastha</option>
    <option value="Khandayat" label="Khandayat">Khandayat</option>
    <option value="Khandelwal" label="Khandelwal">Khandelwal</option>
    <option value="Kharwar" label="Kharwar">Kharwar</option>
    <option value="Khatik" label="Khatik">Khatik</option>
    <option value="Khatri" label="Khatri">Khatri</option>
    <option value="Koli" label="Koli">Koli</option>
    <option value="Kongu Vellala Gounder" label="Kongu Vellala Gounder">Kongu Vellala Gounder</option>
    <option value="Korama" label="Korama">Korama</option>
    <option value="Kori" label="Kori">Kori</option>
    <option value="Koshti" label="Koshti">Koshti</option>
    <option value="Krishnavaka" label="Krishnavaka">Krishnavaka</option>
    <option value="Kshatriya" label="Kshatriya">Kshatriya</option>
    <option value="Kshatriya - Bhavasar" label="Kshatriya - Bhavasar">Kshatriya - Bhavasar</option>
    <option value="Kshatriya/Raju/Varma" label="Kshatriya/Raju/Varma">Kshatriya/Raju/Varma</option>
    <option value="Kudumbi" label="Kudumbi">Kudumbi</option>
    <option value="Kulal" label="Kulal">Kulal</option>
    <option value="Kulalar" label="Kulalar">Kulalar</option>
    <option value="Kulita" label="Kulita">Kulita</option>
    <option value="Kumawat" label="Kumawat">Kumawat</option>
    <option value="Kumbara" label="Kumbara">Kumbara</option>
    <option value="Kumbhakar/Kumbhar" label="Kumbhakar/Kumbhar">Kumbhakar/Kumbhar</option>
    <option value="Kumhar" label="Kumhar">Kumhar</option>
    <option value="Kummari" label="Kummari">Kummari</option>
    <option value="Kunbi" label="Kunbi">Kunbi</option>
    <option value="Kurava" label="Kurava">Kurava</option>
    <option value="Kuravan" label="Kuravan">Kuravan</option>
    <option value="Kurmi" label="Kurmi">Kurmi</option>
    <option value="Kuruba" label="Kuruba">Kuruba</option>
    <option value="Kuruhina Shetty" label="Kuruhina Shetty">Kuruhina Shetty</option>
    <option value="Kurumbar" label="Kurumbar">Kurumbar</option>
    <option value="Kurup" label="Kurup">Kurup</option>
    <option value="Kushwaha" label="Kushwaha">Kushwaha</option>
    <option value="Lambadi/Banjara" label="Lambadi/Banjara">Lambadi/Banjara</option>
    <option value="Lambani" label="Lambani">Lambani</option>
    <option value="Leva Patil" label="Leva Patil">Leva Patil</option>
    <option value="Lingayath" label="Lingayath">Lingayath</option>
    <option value="Lohana" label="Lohana">Lohana</option>
    <option value="Lohar" label="Lohar">Lohar</option>
    <option value="Lubana" label="Lubana">Lubana</option>
    <option value="Madiga" label="Madiga">Madiga</option>
    <option value="Mahajan" label="Mahajan">Mahajan</option>
    <option value="Mahar" label="Mahar">Mahar</option>
    <option value="Mahendra" label="Mahendra">Mahendra</option>
    <option value="Maheshwari" label="Maheshwari">Maheshwari</option>
    <option value="Mahindra" label="Mahindra">Mahindra</option>
    <option value="Mahishya" label="Mahishya">Mahishya</option>
    <option value="Majabi" label="Majabi">Majabi</option>
    <option value="Mala" label="Mala">Mala</option>
    <option value="Malayalee Variar" label="Malayalee Variar">Malayalee Variar</option>
    <option value="Mali" label="Mali">Mali</option>
    <option value="Mangalorean" label="Mangalorean">Mangalorean</option>
    <option value="Maniyani" label="Maniyani">Maniyani</option>
    <option value="Mannadiar" label="Mannadiar">Mannadiar</option>
    <option value="Mannan" label="Mannan">Mannan</option>
    <option value="Mapila" label="Mapila">Mapila</option>
    <option value="Marar" label="Marar">Marar</option>
    <option value="Maratha" label="Maratha">Maratha</option>
    <option value="Maratha - Gomantak" label="Maratha - Gomantak">Maratha - Gomantak</option>
    <option value="Maruthuvar" label="Maruthuvar">Maruthuvar</option>
    <option value="Marvar" label="Marvar">Marvar</option>
    <option value="Marwari" label="Marwari">Marwari</option>
    <option value="Matang" label="Matang">Matang</option>
    <option value="Maurya" label="Maurya">Maurya</option>
    <option value="Meda" label="Meda">Meda</option>
    <option value="Medara" label="Medara">Medara</option>
    <option value="Meena" label="Meena">Meena</option>
    <option value="Meenavar" label="Meenavar">Meenavar</option>
    <option value="Mehra" label="Mehra">Mehra</option>
    <option value="Menon" label="Menon">Menon</option>
    <option value="Meru Darji" label="Meru Darji">Meru Darji</option>
    <option value="Modak" label="Modak">Modak</option>
    <option value="Mogaveera" label="Mogaveera">Mogaveera</option>
    <option value="Monchi" label="Monchi">Monchi</option>
    <option value="Mudaliar" label="Mudaliar">Mudaliar</option>
    <option value="Mudaliar - Arcot" label="Mudaliar - Arcot">Mudaliar - Arcot</option>
    <option value="Mudaliar - Saiva" label="Mudaliar - Saiva">Mudaliar - Saiva</option>
    <option value="Mudaliar - Senguntha" label="Mudaliar - Senguntha">Mudaliar - Senguntha</option>
    <option value="Mudiraj" label="Mudiraj">Mudiraj</option>
    <option value="Munnuru Kapu" label="Munnuru Kapu">Munnuru Kapu</option>
    <option value="Muthuraja" label="Muthuraja">Muthuraja</option>
    <option value="Naagavamsam" label="Naagavamsam">Naagavamsam</option>
    <option value="Nadar" label="Nadar">Nadar</option>
    <option value="Nagaralu" label="Nagaralu">Nagaralu</option>
    <option value="Nai" label="Nai">Nai</option>
    <option value="Naicken" label="Naicken">Naicken</option>
    <option value="Naicker" label="Naicker">Naicker</option>
    <option value="Naidu" label="Naidu">Naidu</option>
    <option value="Naik" label="Naik">Naik</option>
    <option value="Nair" label="Nair">Nair</option>
    <option value="Nair - Chekkala" label="Nair - Chekkala">Nair - Chekkala</option>
    <option value="Nair - Vaniya" label="Nair - Vaniya">Nair - Vaniya</option>
    <option value="Nair - Velethadathu" label="Nair - Velethadathu">Nair - Velethadathu</option>
    <option value="Nair - Veluthedathu" label="Nair - Veluthedathu">Nair - Veluthedathu</option>
    <option value="Nair - Vilakkithala" label="Nair - Vilakkithala">Nair - Vilakkithala</option>
    <option value="Namasudra" label="Namasudra">Namasudra</option>
    <option value="Nambiar" label="Nambiar">Nambiar</option>
    <option value="Nambisan" label="Nambisan">Nambisan</option>
    <option value="Namboodiri - Brahmin" label="Namboodiri - Brahmin">Namboodiri - Brahmin</option>
    <option value="Namosudra" label="Namosudra">Namosudra</option>
    <option value="Napit" label="Napit">Napit</option>
    <option value="Nayak" label="Nayak">Nayak</option>
    <option value="Nayaka" label="Nayaka">Nayaka</option>
    <option value="Neeli" label="Neeli">Neeli</option>
    <option value="Nhavi" label="Nhavi">Nhavi</option>
    <option value="OBC - Barber/Naayee" label="OBC - Barber/Naayee">OBC - Barber/Naayee</option>
    <option value="Oswal" label="Oswal">Oswal</option>
    <option value="Otari" label="Otari">Otari</option>
    <option value="Other" label="Other">Other</option>
    <option value="Padmasali" label="Padmasali">Padmasali</option>
    <option value="Panchal" label="Panchal">Panchal</option>
    <option value="Pandaram" label="Pandaram">Pandaram</option>
    <option value="Panicker" label="Panicker">Panicker</option>
    <option value="Paravan" label="Paravan">Paravan</option>
    <option value="Parit" label="Parit">Parit</option>
    <option value="Parkava Kulam" label="Parkava Kulam">Parkava Kulam</option>
    <option value="Partraj" label="Partraj">Partraj</option>
    <option value="Patel" label="Patel">Patel</option>
    <option value="Patel - Desai" label="Patel - Desai">Patel - Desai</option>
    <option value="Patel - Dodia" label="Patel - Dodia">Patel - Dodia</option>
    <option value="Patel - Kadva" label="Patel - Kadva">Patel - Kadva</option>
    <option value="Patel - Leva" label="Patel - Leva">Patel - Leva</option>
    <option value="Patnaick" label="Patnaick">Patnaick</option>
    <option value="Patra" label="Patra">Patra</option>
    <option value="Perika" label="Perika">Perika</option>
    <option value="Pillai" label="Pillai">Pillai</option>
    <option value="Pisharody" label="Pisharody">Pisharody</option>
    <option value="Poduval" label="Poduval">Poduval</option>
    <option value="Poosala" label="Poosala">Poosala</option>
    <option value="Prajapati" label="Prajapati">Prajapati</option>
    <option value="Pulaya" label="Pulaya">Pulaya</option>
    <option value="Rajaka/Chakali/Dhobi" label="Rajaka/Chakali/Dhobi">Rajaka/Chakali/Dhobi</option>
    <option value="Rajbhar" label="Rajbhar">Rajbhar</option>
    <option value="Rajput" label="Rajput">Rajput</option>
    <option value="Rajput - Kumaoni" label="Rajput - Kumaoni">Rajput - Kumaoni</option>
    <option value="Rajput - Lodhi" label="Rajput - Lodhi">Rajput - Lodhi</option>
    <option value="Ramdasia" label="Ramdasia">Ramdasia</option>
    <option value="Ramgharia" label="Ramgharia">Ramgharia</option>
    <option value="Ravidasia" label="Ravidasia">Ravidasia</option>
    <option value="Rawat" label="Rawat">Rawat</option>
    <option value="Reddiar" label="Reddiar">Reddiar</option>
    <option value="Reddy" label="Reddy">Reddy</option>
    <option value="Relli" label="Relli">Relli</option>
    <option value="SSK" label="SSK">SSK</option>
    <option value="Sadgop" label="Sadgop">Sadgop</option>
    <option value="Sagara - Uppara" label="Sagara - Uppara">Sagara - Uppara</option>
    <option value="Saha" label="Saha">Saha</option>
    <option value="Sahu" label="Sahu">Sahu</option>
    <option value="Saini" label="Saini">Saini</option>
    <option value="Saiva Vellala" label="Saiva Vellala">Saiva Vellala</option>
    <option value="Saliya" label="Saliya">Saliya</option>
    <option value="Sambava" label="Sambava">Sambava</option>
    <option value="Saraswat - Brahmin" label="Saraswat - Brahmin">Saraswat - Brahmin</option>
    <option value="Savji" label="Savji">Savji</option>
    <option value="Scheduled Caste (SC)" label="Scheduled Caste (SC)">Scheduled Caste (SC)</option>
    <option value="Scheduled Tribe (ST)" label="Scheduled Tribe (ST)">Scheduled Tribe (ST)</option>
    <option value="Senai Thalaivar" label="Senai Thalaivar">Senai Thalaivar</option>
    <option value="Sepahia" label="Sepahia">Sepahia</option>
    <option value="Setti Balija" label="Setti Balija">Setti Balija</option>
    <option value="Shah" label="Shah">Shah</option>
    <option value="Shimpi" label="Shimpi">Shimpi</option>
    <option value="Sindhi - Bhanusali" label="Sindhi - Bhanusali">Sindhi - Bhanusali</option>
    <option value="Sindhi - Bhatia" label="Sindhi - Bhatia">Sindhi - Bhatia</option>
    <option value="Sindhi - Chhapru" label="Sindhi - Chhapru">Sindhi - Chhapru</option>
    <option value="Sindhi - Dadu" label="Sindhi - Dadu">Sindhi - Dadu</option>
    <option value="Sindhi - Hyderabadi" label="Sindhi - Hyderabadi">Sindhi - Hyderabadi</option>
    <option value="Sindhi - Larai" label="Sindhi - Larai">Sindhi - Larai</option>
    <option value="Sindhi - Lohana" label="Sindhi - Lohana">Sindhi - Lohana</option>
    <option value="Sindhi - Rohiri" label="Sindhi - Rohiri">Sindhi - Rohiri</option>
    <option value="Sindhi - Sehwani" label="Sindhi - Sehwani">Sindhi - Sehwani</option>
    <option value="Sindhi - Thatai" label="Sindhi - Thatai">Sindhi - Thatai</option>
    <option value="Sindhi-Amil" label="Sindhi-Amil">Sindhi-Amil</option>
    <option value="Sindhi-Baibhand" label="Sindhi-Baibhand">Sindhi-Baibhand</option>
    <option value="Sindhi-Larkana" label="Sindhi-Larkana">Sindhi-Larkana</option>
    <option value="Sindhi-Sahiti" label="Sindhi-Sahiti">Sindhi-Sahiti</option>
    <option value="Sindhi-Sakkhar" label="Sindhi-Sakkhar">Sindhi-Sakkhar</option>
    <option value="Sindhi-Shikarpuri" label="Sindhi-Shikarpuri">Sindhi-Shikarpuri</option>
    <option value="Somvanshi" label="Somvanshi">Somvanshi</option>
    <option value="Sonar" label="Sonar">Sonar</option>
    <option value="Soni" label="Soni">Soni</option>
    <option value="Sozhiya Vellalar" label="Sozhiya Vellalar">Sozhiya Vellalar</option>
    <option value="Sri Vaishnava" label="Sri Vaishnava">Sri Vaishnava</option>
    <option value="Srisayana" label="Srisayana">Srisayana</option>
    <option value="Subarna Banik" label="Subarna Banik">Subarna Banik</option>
    <option value="Sugali (Naika)" label="Sugali (Naika)">Sugali (Naika)</option>
    <option value="Sundhi" label="Sundhi">Sundhi</option>
    <option value="Surya Balija" label="Surya Balija">Surya Balija</option>
    <option value="Sutar" label="Sutar">Sutar</option>
    <option value="Swarnakar" label="Swarnakar">Swarnakar</option>
    <option value="Tamboli" label="Tamboli">Tamboli</option>
    <option value="Tanti" label="Tanti">Tanti</option>
    <option value="Tantuway" label="Tantuway">Tantuway</option>
    <option value="Telaga" label="Telaga">Telaga</option>
    <option value="Teli" label="Teli">Teli</option>
    <option value="Thachar" label="Thachar">Thachar</option>
    <option value="Thakkar" label="Thakkar">Thakkar</option>
    <option value="Thakur" label="Thakur">Thakur</option>
    <option value="Thandan" label="Thandan">Thandan</option>
    <option value="Thigala" label="Thigala">Thigala</option>
    <option value="Thiyya" label="Thiyya">Thiyya</option>
    <option value="Togata" label="Togata">Togata</option>
    <option value="Turupu Kapu" label="Turupu Kapu">Turupu Kapu</option>
    <option value="Udayar" label="Udayar">Udayar</option>
    <option value="Urali Gounder" label="Urali Gounder">Urali Gounder</option>
    <option value="Urs" label="Urs">Urs</option>
    <option value="Vada Balija" label="Vada Balija">Vada Balija</option>
    <option value="Vadagalai" label="Vadagalai">Vadagalai</option>
    <option value="Vaddera" label="Vaddera">Vaddera</option>
    <option value="Vaduka" label="Vaduka">Vaduka</option>
    <option value="Vaish" label="Vaish">Vaish</option>
    <option value="Vaish - Dhaneshawat" label="Vaish - Dhaneshawat">Vaish - Dhaneshawat</option>
    <option value="Vaishnav" label="Vaishnav">Vaishnav</option>
    <option value="Vaishnav - Bhatia" label="Vaishnav - Bhatia">Vaishnav - Bhatia</option>
    <option value="Vaishnav - Vania" label="Vaishnav - Vania">Vaishnav - Vania</option>
    <option value="Vaishya" label="Vaishya">Vaishya</option>
    <option value="Vallala" label="Vallala">Vallala</option>
    <option value="Valluvan" label="Valluvan">Valluvan</option>
    <option value="Valmiki" label="Valmiki">Valmiki</option>
    <option value="Vanika Vyshya" label="Vanika Vyshya">Vanika Vyshya</option>
    <option value="Vaniya - Nair" label="Vaniya - Nair">Vaniya - Nair</option>
    <option value="Vanjara" label="Vanjara">Vanjara</option>
    <option value="Vankar" label="Vankar">Vankar</option>
    <option value="Vannan" label="Vannan">Vannan</option>
    <option value="Vannar" label="Vannar">Vannar</option>
    <option value="Vanniyakullak Kshatriya" label="Vanniyakullak Kshatriya">Vanniyakullak Kshatriya</option>
    <option value="Vanniyar" label="Vanniyar">Vanniyar</option>
    <option value="Variar" label="Variar">Variar</option>
    <option value="Varshney" label="Varshney">Varshney</option>
    <option value="Veerashaiva" label="Veerashaiva">Veerashaiva</option>
    <option value="Velaan" label="Velaan">Velaan</option>
    <option value="Velama" label="Velama">Velama</option>
    <option value="Velar" label="Velar">Velar</option>
    <option value="Vellalar" label="Vellalar">Vellalar</option>
    <option value="Veluthedathu - Nair" label="Veluthedathu - Nair">Veluthedathu - Nair</option>
    <option value="Vettuva Gounder" label="Vettuva Gounder">Vettuva Gounder</option>
    <option value="Vilakithala - Nair" label="Vilakithala - Nair">Vilakithala - Nair</option>
    <option value="Vishwakarma" label="Vishwakarma">Vishwakarma</option>
    <option value="Viswabrahmin" label="Viswabrahmin">Viswabrahmin</option>
    <option value="Vokkaliga" label="Vokkaliga">Vokkaliga</option>
    <option value="Vysya" label="Vysya">Vysya</option>
    <option value="Waada Balija" label="Waada Balija">Waada Balija</option>
    <option value="Warrier" label="Warrier">Warrier</option>
    <option value="Yadav" label="Yadav">Yadav</option>
    <option value="Yellapu" label="Yellapu">Yellapu</option>
    </optgroup>
                </select>
                  
                </div>
                



                <div class="aa-single-field">

                 <label for="profile_for">Marital Status &nbsp;&nbsp;&nbsp; </label>

             
               <select name="matirian_status">

                     <?php 

            if($view['matirian_status']!=''){
              echo "<option selected>".$view['matirian_status']."</option>";
            }


               ?>

                  <option value="Never Married" label="Never Married">Never Married</option>
    <option value="Divorced" label="Divorced">Divorced</option>
    <option value="Widowed" label="Widowed">Widowed</option>
    <option value="Awaiting Divorce" label="Awaiting Divorce">Awaiting Divorce</option>
    <option value="Annulled" label="Annulled">Annulled</option>
                  
                     
               </select>  


                 
 <label for="mother_toung">Mother Toung </label>
                 <select name="mother_toung">    

                                <?php 

            if($view['mother_toung']!=''){
              echo "<option selected>".$view['mother_toung']."</option>";
            }


               ?>

<optgroup id="frm-mothertongue-optgroup-Frequently Used" label="Frequently Used">
    <option value="Assamese" label="Assamese">Assamese</option>
    <option value="Bengali" label="Bengali">Bengali</option>
    <option value="English" label="English">English</option>
    <option value="Gujarati" label="Gujarati">Gujarati</option>
    <option value="Hindi" label="Hindi">Hindi</option>
    <option value="Kannada" label="Kannada">Kannada</option>
    <option value="Konkani" label="Konkani">Konkani</option>
    <option value="Malayalam" label="Malayalam">Malayalam</option>
    <option value="Marathi" label="Marathi">Marathi</option>
    <option value="Marwari" label="Marwari">Marwari</option>
    <option value="Odia" label="Odia">Odia</option>
    <option value="Punjabi" label="Punjabi">Punjabi</option>
    <option value="Sindhi" label="Sindhi">Sindhi</option>
    <option value="Tamil" label="Tamil">Tamil</option>
    <option value="Telugu" label="Telugu">Telugu</option>
    <option value="Urdu" label="Urdu">Urdu</option>
    </optgroup>
    <optgroup id="frm-mothertongue-optgroup-More" label="More">
    <option value="Aka" label="Aka">Aka</option>
    <option value="Arabic" label="Arabic">Arabic</option>
    <option value="Arunachali" label="Arunachali">Arunachali</option>
    <option value="Awadhi" label="Awadhi">Awadhi</option>
    <option value="Baluchi" label="Baluchi">Baluchi</option>
    <option value="Bhojpuri" label="Bhojpuri">Bhojpuri</option>
    <option value="Bhutia" label="Bhutia">Bhutia</option>
    <option value="Brahui" label="Brahui">Brahui</option>
    <option value="Brij" label="Brij">Brij</option>
    <option value="Burmese" label="Burmese">Burmese</option>
    <option value="Chattisgarhi" label="Chattisgarhi">Chattisgarhi</option>
    <option value="Chinese" label="Chinese">Chinese</option>
    <option value="Coorgi" label="Coorgi">Coorgi</option>
    <option value="Dogri" label="Dogri">Dogri</option>
    <option value="French" label="French">French</option>
    <option value="Garhwali" label="Garhwali">Garhwali</option>
    <option value="Garo" label="Garo">Garo</option>
    <option value="Haryanavi" label="Haryanavi">Haryanavi</option>
    <option value="Himachali/Pahari" label="Himachali/Pahari">Himachali/Pahari</option>
    <option value="Hindko" label="Hindko">Hindko</option>
    <option value="Kakbarak" label="Kakbarak">Kakbarak</option>
    <option value="Kanauji" label="Kanauji">Kanauji</option>
    <option value="Kashmiri" label="Kashmiri">Kashmiri</option>
    <option value="Khandesi" label="Khandesi">Khandesi</option>
    <option value="Khasi" label="Khasi">Khasi</option>
    <option value="Koshali" label="Koshali">Koshali</option>
    <option value="Kumaoni" label="Kumaoni">Kumaoni</option>
    <option value="Kutchi" label="Kutchi">Kutchi</option>
    <option value="Ladakhi" label="Ladakhi">Ladakhi</option>
    <option value="Lepcha" label="Lepcha">Lepcha</option>
    <option value="Magahi" label="Magahi">Magahi</option>
    <option value="Maithili" label="Maithili">Maithili</option>
    <option value="Malay" label="Malay">Malay</option>
    <option value="Manipuri" label="Manipuri">Manipuri</option>
    <option value="Miji" label="Miji">Miji</option>
    <option value="Mizo" label="Mizo">Mizo</option>
    <option value="Monpa" label="Monpa">Monpa</option>
    <option value="Nepali" label="Nepali">Nepali</option>
    <option value="Pashto" label="Pashto">Pashto</option>
    <option value="Persian" label="Persian">Persian</option>
    <option value="Rajasthani" label="Rajasthani">Rajasthani</option>
    <option value="Russian" label="Russian">Russian</option>
    <option value="Sanskrit" label="Sanskrit">Sanskrit</option>
    <option value="Santhali" label="Santhali">Santhali</option>
    <option value="Seraiki" label="Seraiki">Seraiki</option>
    <option value="Sinhala" label="Sinhala">Sinhala</option>
    <option value="Sourashtra" label="Sourashtra">Sourashtra</option>
    <option value="Spanish" label="Spanish">Spanish</option>
    <option value="Swedish" label="Swedish">Swedish</option>
    <option value="Tagalog" label="Tagalog">Tagalog</option>
    <option value="Tulu" label="Tulu">Tulu</option>
    <option value="Other" label="Other">Other</option>
    </optgroup>
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

