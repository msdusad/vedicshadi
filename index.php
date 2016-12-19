<?php require_once('header.php');?>
  <!-- End header section -->
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}
button.accordion:after {
    content: '\02795';
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}
button.accordion.active:after {
    content: "\2796";
}
div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}
div.panel.show {
    opacity: 1;
    max-height: 500px;
}
</style>


  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/slider1.jpg" alt="img">
          <!-- Top slider content -->
        <!--   <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div> -->
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/slider3.jpg" alt="img">
          <!-- Top slider content -->
        <!--   <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div> -->
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/slider2.jpg" alt="img">
          <!-- Top slider content -->
         <!--  <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div> -->
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->       
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/slider4.jpg" alt="img">
          <!-- Top slider content -->
         <!--  <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div> -->
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->

               <div class="aa-top-slider-single">
          <img src="img/slider/slider5.jpg" alt="img">
          <!-- Top slider content -->
         <!--  <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div> -->
          <!-- / Top slider content -->
        </div>

         <!-- Top slider single slide -->
              <div class="aa-top-slider-single">
          <img src="img/slider/guru.jpg" alt="img">
          <!-- Top slider content -->
         <!--  <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div> -->
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
 
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
<form action="search.php" method="post">
   <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="gender">
                   <option value="" selected>I'm Looking For </option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    
                  </select>
                </div>
              </div>

                 <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="age_from">
                   <option value="" selected>Ager From</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="30">40</option>
                   
                  </select>
                </div>
              </div>



        <!--       <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
              </div> -->
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="age_to">
                   <option value="" selected>Age To</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                    <option value="35">35</option>
                    <option value="40">40</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="religion">
                    <option value="" selected>Religion</option>
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
              </div>

<div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="cast">
                    <option value="" selected>Cast</option>
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
              </div>

              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="matirian_status">
                    <option value="" selected>Marital Status</option>
                     <option value="Never Married" label="Never Married">Never Married</option>
    <option value="Divorced" label="Divorced">Divorced</option>
    <option value="Widowed" label="Widowed">Widowed</option>
    <option value="Awaiting Divorce" label="Awaiting Divorce">Awaiting Divorce</option>
    <option value="Annulled" label="Annulled">Annulled</option>
                   
                  </select>
              </div>
              </div>

<br><br><br>

              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="mother_toung">
                    <option value="" selected> Mother Tongue</option>
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
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search" >
                </div>
              </div>
              </form>
            </div>
          </div>
      <!--    <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>                  
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">100.00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>      
              </div>
            </div>
          </div>  
         </div> -->



        </div>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">


<button class="accordion"> Vedicshadi.com  ही क्यों ?</button>
<div id="foo" class="panel">
  <p>
<br>                  
                                     हरे कृष्ण , हमारे आस पास बहुत सी ऐसी संस्थाए है जो शादिया करवा रही हैं. उनका एकमात्र उदेशय शादी करवान और पैसे कमान है | कुछ संस्थाए युवक - युवतियों की मिलवाने का काम कर रहे हैं और बदले मैं पैसा ले रहें है . 
परंतु वैदिक शादी संस्था का मूल उद्देश्य हैं की नए  युवक - युवतियों ko milana or unko प्रशिक्षण देंna जिससे उनका वैवाहिक जीवन सुखमय हो सके | हमारे उद्दस्य हैं की ज्यादा से ज्याद युवक -युवतियों को उनकी पसंद के अनुसार मिलवाना और शाद्दी के महत्व को बताना |

" शादी एक सेक्स का साधन नही हैं | शादी का मतलब जीवन व समाज को सुचारू रूप से चलाने से हैं   "

शादी से ही जीवन रूपी ग्रस्थो को सुरुवात होती हैं  और यदि सुरुवात के ही समय यदि आप सही चुनाव नही कर पाए तो वह शादी नरक के समान हो जाती है  और यदि सही चुनाव कर लिया तो आप का जीवन स्वर्ग बन जाता है  और ऐसे जीवन की कामना देवता गण भी करते है.तो हम साधारण मनुष्य का जीवन अति सुखमय हो जायेगा .क्या कहना - इसलिए मैं आप सभी से अनुरोध करता हूँ की आप सभी  जो नए वैवाहिक जीवन मैं बंधने जा रहे हैं  वेदीक्षादि.कॉम पर रजिस्ट्रेशन करें और अपने वैवाहिक जीवन को सफल बनाये . धन्यवाद .
                   
<br><br>
  First, the number of anti-feminism and men’s rights websites has increased dramatically over the past few years. Second, we see an increasing number of men who refuse to get married. As one man put it, “Why should I get married when it is such a bad business deal for men? Marriage has over a 50 percent chance of failure, and my wife can divorce me for no reason at all due to the no-fault divorce laws, and ruin me financially by taking at least half of my assets and income through the anti-male divorce courts. She can also destroy me emotionally by taking my children from me and not allowing me to ever see them again”.<br>

Just think about it- right now , at this very moment, millions of men’s lives are being destroyed by women who have filed false domestic violence (DV) charges against them, or filed false rape accusations against them, or by their ex-wives who are destroy the man’s life financially through the feminist divorce courts and are destroying the man emotionally by not allowing their fathers to see their own children! Who in their right mind would want to get married in such a system?<br>

Also, over 50 percent of American women are single, without a husband or boyfriend. I’m sure the statistics in other western countries are similar. So the vast amounts of single women is more evidence that a very large percent of men are refusing to get married.<br>

Third, an increasing number of western men are going to traditional non-feminist countries in Asia and marrying traditional asian women. I think it is this third trend towards totally opting out of modern western marriage that is the biggest slap in the face to feminist western women. I’ve heard many bitter and angry western women criticizing asian women and the western men who marry them, but it’s clear that western women are simply jealous of asian women and cannot compete with them. In case you haven’t noticed by now, asian women tend to be a lot more feminine, petite, and humble than masculine arrogant western women.<br>

And the majority of western men who are married to asian women testify that they are very happy, much happier than they ever were with western or American women.

Before we get into the substance of this essay, let me address one vital question. Most of you are probably asking “Who is Srila Prabhupada?” so let me give a brief biography.<br>

Srila Prabhupada was born in Kolkata, India, in 1896. He met Bhaktisiddhanta Saraswati Goswami in 1922, who was the foremost scholar, philosopher, and devotee in India at that time. He requested Srila Prabhupada to preach India’s pure dharma in English to the western world. So in 1965, at the age of 69 years old, Srila Prabhupada traveled to America to preach this message. He arrived in New York City and began preaching about India’s Vedic dharma and culture, and within 10 years had established over a hundred temples all over the world, with tens of thousands of followers.<br>

Srila Prabhupada’s most significant contribution, however, is his books. He published over 80 books, and translated the Srimad-Bhagavatam into English. In his Srimad-Bhagavatam translation, Srila Prabhupada addressed many issues about the modern society- politics, economics, culture, religion, spirituality, environ.</p>
</div>



<button class="accordion">शादी के प्रति अन्य आचार्यो के विचार </button>
<div class="panel">
  <p>Weddings to me are wondrous because they are so filled with tomorrows. -Mary Forsell <br>

For two people in a marriage to live together day after day is unquestionably the one miracle the Vatican has overlooked. -Bill Cosby<br>


It is such a happiness when good people get together – and they always do. –Jane Austen<br>

I love being married. It’s so great to find that one special person you want to annoy for the rest of your life. -Rita Rudner<br>

A great marriage is not when the “perfect couple” comes together. It is when an imperfect couple learns to enjoy their differences. –Dave Meurer<br>

Marriage is a wonderful invention: then again, so is a bicycle repair kit. -Billy Connolly<br>

Some people ask the secret of our long marriage. We take time to go to a restaurant two times a week. A little candlelight, dinner, soft music and dancing. She goes Tuesdays, I go Fridays. -Henny Youngman<br>

The trouble with some women is that they get all excited about nothing – and then marry him. -Cher<br>

No long-term marriage is made easily, and there have been times when I’ve been so angry or so hurt that I thought my love would never recover. And then, in the midst of near despair, something has happened beneath the surface. A bright little flashing fish of hope has flicked silver fins and the water is bright and suddenly I am returned to a state of love again — till next time. –Madeleine L’Engle<br>

Weddings are never about the bride and groom, weddings are public platforms for dysfunctional families. –Lisa Kleypas<br>

To be fully seen by somebody, then, and be loved anyhow – this is a human offering that can border on miraculous. –Elizabeth Gilbert<br>

Marriage has no guarantees. If that’s what you’re looking for, go live with a car battery. -Erma Bombeck<br>

The problem with marriage is that it ends every night after making love, and it must be rebuilt every morning before breakfast. –Gabriel Garcí­a Márquez<br>

Weddings take months to organize, and there are fittings and invitation lists and old aunts being coy about the honeymoon, and having to have somebody’s perfectly hideous cousin for a bridesmaid. And then hundreds of appalling wedding presents. Toast-racks and Japanese vases and pictures that never, in a million years, would you want to hang on the wall. And you spend all your time writing insincere thank-you letters with your fingers crossed, and everybody gets tense and miserable and there’s lots of bursting into tears. The miracle is that anybody ever gets married at all, but I bet most girls have nervous breakdowns on their honeymoons. –Rosamunde Pilcher<br>

A bride at her second marriage does not wear a veil. She wants to see what she is getting. –Helen Rowland <br>

If I get married, I want to be very married.  -Audrey Hepburn<br>

We are gonna have tons and tons of opportunities to meet gorgeous ladies that get so aroused by the thought of marriage that they’ll throw their inhibitions to the wind. -Vince Vaughn as Jeremy Grey in Wedding Crashers

Longed for him. Got him. Shit. –Margaret Atwood<br>

A man is incomplete until he is married. After that, he is finished. -Zsa Zsa Gabor<br>

By all means marry; if you get a good wife, you’ll become happy; if you get a bad one, you’ll become a philosopher. -Socrates<br>

I used to think a wedding was a simple affair. Boy and girl meet, they fall in love, he buys a ring, she buys a dress, they say I do. I was wrong. That’s getting married. A wedding is an entirely different proposition. -Steve Martin as George Banks in Father of the Bride

Marriage is a fine institution, but I’m not ready for an institution. –Mae West<br>

Why does a woman work ten years to change a man, then complain he’s not the man she married? –Barbra Streisand<br><br>

Marriage is give and take. You’d better give it to her or she’ll take it anyway. -Joey Adams<br>

I am about to be married, and am of course in all the misery of a man in pursuit of happiness. –Lord Byron <br>

Sometimes I wonder if men and women really suit each other. Perhaps they should live next door and just visit now and then. –Katharine Hep<br>

Some people claim that marriage interferes with romance. There’s no doubt about it. Anytime you have a romance, your wife is bound to interfere. -Groucho Marx<br>

Mawidge is a dweam wiffin a dweam. The dweam of wuv wapped wiffin the gweater dweam of everwasting west. Eternity is our fwiend, wemember that, and wuv wiw fowwow you fowever. -William Goldman in The Princess Bride

Weddings remind us that our lives have meaning and that love is the strongest bond, the happiest joy, and the loveliest healing we can ever experience. -Daphne Rose Kingma

I think men who have a pierced ear are better prepared for marriage. They’ve experienced pain and bought jewelry. -Rita Rudner</p>
</div>

<button class="accordion">  सुखी शादी के मन्त्र </button>
<div class="panel">
  <p>1. "A successful marriage requires falling in love many times, always with the same person." <br>
2.
"Love is the greatest gift when given. It is the highest honor when received."<br>

3.
"A great marriage isn't something that just happens; it’s something that must be created."<br>

4.
"Love is an ideal thing, marriage a real thing."<br>

<b>HAPPY MARRIED LIFE....10 GOLDEN RULES
by dhameshvari devi dasi</b> <br>

"Wishing you a very happy married life", we often hear these wishes during wedding ceremonies....How do we create a really successful and happy married life? Especially when we are aspiring devotees of Krishna? <br>

1.First of all, make sure that your partner/ would be partner is interested in serving Krishna. Whether he or she serves wonderfully...not an issue...the interest must be there.<br>

2.Make sure he or she is not a materialistic person.It is perfectly fine to accumulate wealth, to have a promising bank balance but never ever give place to greediness. Don't choose a person who is only money minded....Money is never enough...Don't marry a person who will make you work like a donkey for the rest of life.....accumulating wealth without any purpose.<br>

3. Life's best things is usually the simplest things.Like Prabhupada often says,"Simple living, High thinking".Dont give too much importance to material comfort...in fact lead a simple life and offer all the best things to Krishna.<br>

4.Serve the Vaishnavas.Vaishnavas' blessings are an important aspect in grihasta life. Invite Vaishnavas to your home. Serve them with sumptuous prashadam.Buy them gifts during festivals or any important family events.Treat them like your own family members.Be generous to them.<br>

5. Avoid unnecessary sex....Sex is totally not good even in legal marriage.At certain point of time, sex should be fully given up even in grihasta life.... Having sex for the purpose of having children is fine but other than that, minimize as much as you can.<br>

6.Pray together, do arati together, take Prasadam together.Watch Krishna conscious videos together.Chant together. Enhance your relationship by doing something for the pleasure of Krishna.Visit holy places together.<br>

7.Once you have children, you must try your level best to make them Krishna conscious.In fact, that is your biggest duty. Since they are infants, show them Krishna's pictures,teach them short bhajans. As they grow up, encourage them to read Krishna's stories..Of course you read with them too.Chant with them.Teach them good moral values by showing examples.Dont fight or argue in front of them.Never.<br>

8.When there is a problem, don't point finger at each other....solve it intelligently together instead....Don't find fault on each other.<br>

9.Spend at least 30 minutes every week to discuss about the welfare of your family.First, of course your krishna consciousness.Whether you both  are completing your rounds, chanting attentively...of course you can also discuss  financial issues and so on as well.<br>

10.Lastly, be determined that whatever happens, you are not going to leave Krishna...if you have this determination, even if you want to leave, Krishna wont leave you..</p>
</div>

<button class="accordion">कृष्ण भावना मर्त मैं शादी का महत्व </button>
<div id="foo" class="panel">
  <p> Marriage in Krishna Consciousness
In Vedic culture four main divisions of society or ashrams are recognized: brahmacarya (celibacy), grihasta (householder life), vanaprastha (pre-retirement), sannyasa (renounced preacher).<br>
Grihastas make up most of society and their contribution is therefore very great. The grihasta stage of life is the only ashram where people are engaged in financial activity and grihastas are therefore expected to be very generous. They are called upon to support the rest of the ashrams and to fund temples and other spiritual projects. That is their dharma (duty).<br>
At the beginning of the movement, one newly-wedded disciple asked Srila Prabhupada for instructions on his new duties. He was expecting some lengthy explanations but Srila Prabhupada simply told him that before eating he should go outside and loudly call out three times, “Is anyone hungry?” and he should feed those who answer his call. The purport of this instruction is that grihastas should not be selfish or self-centred. They must serve and take care of those in the other ashrams.<br>
It is the duty of householders to maintain peace in the world by following religious principles and raising their children to become Krishna conscious citizens! In the Srimad-Bhagavatam, King Rsabdeva advises that one should not become a parent unless one can liberate one’s child. This is indeed a big responsibility.<br>
Ideal householder life may seem somewhat difficult in present daily life, but one should not be discouraged. There is a place for all levels of grihastas in Krishna consciousness and no matter what rung you may find yourself on, always remember the goal and work towards it.
It is important that marriage partners are compatible and like-minded so that the relationship is harmonious. This is a lifetime commitment where the question of divorce should never arise. Therefore choosing a partner should be done with a lot of deliberation. Conscious effort, mutual adjustment and sacrifice are needed to keep this sacred bond intact.
Those wishing to enter household life may take advice from the married devotees at the temple or you may contact us.    
<br>                    
 The teachings of Srila Prabhupada on women and anti-feminism

The purpose of this essay is to address the issue of feminism and misandry (hatred of men, the opposite of misogyny) and how it has destroyed modern society. We will be analyzing many of the statements made by Srila Prabhupada about women, their role in society, and the anti-feminism stance of his teachings.<br>

Before continuing, let me say a few words of encouragement. Over the past few years, a major anti-feminism backlash has been occurring in the western countries like America and Europe, and even somewhat in Asia and India. This has become manifest in a few different ways.
.</p>
</div>



<button class="accordion">Iskcon के महान आचार्यो का शादी के प्रति विचार</button>
<div id="foo" class="panel">
  <p>

  जीवन रूपी गाड़ी को चलाने के लिए पति व पत्नी दो पहियो के समान हैं . यदि एक भी पहिया (चक्र) मैं कमी है तो गाड़ी नही चल पायेगी . दूसरे का साथ दे कर जीवन को आगे बढाते हैं  और जीवन की सार्थकता को पूर्ण करते हैं .
" जीवन भागवान का एक अनुपम उपहार हैं  और पति - पत्नी इस उपहार के दो बीज हैं जो भगवान् के जीवन रूपी उपहार को आगे बढाते  हैं  ")
<br><br>
<b>Bhaktivinoda Thakur</b>.<br>
  Marriage with a view to peaceful and virtuous life and with a view to procreate servants of the Lord is a good institution for a Vaisnava. Spiritual cultivation is the main object of life. Do everything that helps it and abstain from everything that thwarts the cultivation of the spirit.<br><br>


J<b>ayapataka Swami</b><br>

Krishna will be very pleased, if you follow your vows for Him. We hope that people will take it very seriously, when they make this marriage vows, "That's what I am doing for Krishna." There is a pastime in Padma-purana were someone was following their marriage vows and Krishna came and took them all Back to Godhead, because they followed for Krishna.
Put God in the Center<br><br>

<b>Bhakti Tirtha Swami</b><br>

Nowadays, people begin to think that they need convenience rather than love—just marry someone who will take care of you. However, if a person puts God in the center, he or she will look for a partner who will assist in their spiritual evolution. You want to find a partner who will help you advance spiritually. If that type of relationship does not manifest, you have to realize that you do not have the right connection.<br>

<li>Primary Factor For Married Couples</li>
<li>A.C. Bhaktivedanta Swami Prabhupada</li>
<li>They (The married couples) should know that bodily relations between the husband and wife is secondary ; primary factor is that both should help one another in the matter of advancement of Krishna consciousness.</li></p>
</div>





<button class="accordion">विवाह की पद्धति</button>
<div id="foo" class="panel">
  <p>
आधुनिक युग मैं विवाह अनगिनत विकल्पों और समझोतो का विषय बन गया हैं . लड़का और लड़की एक दूसरे को पसंद करते हैं  और स्वेच्छापूर्वक एक बंधन मैं बांध जाते हैं  जो विवाह की सही पद्वति नही है. 
सभी धर्मो मैं विवाह की अलग - अलग पद्धतिया है . जो सही व सत्य है . हमें इन्हें अपनाकर ही वैवाहिक जीवन को जीना चाहिए . हम यह सभी धर्मो के लोगो को जगरूप करके उन्ही की प्रथा के अनुसार उnका विवाह करने का परयash कर रहें है .
हमारे सभी धर्मवासियो से निवदेन है वह इसे किसी विशेष धर्म से  जोड़कर न देखें . हम धर्म से ऊपर उठकर  मानव जीवन के उद्देश्यों को कैसे पूरा करें ? से है | इसके लिए किन शिक्षाओ की आवश्यकता है इसे देने का प्रयास है |
 <br>
</p>
</div>



            <div class="aa-title">
              <h2>Find your Special Someone</h2>
              <span></span>
              <p><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus --></p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Sign up</a></h4>
                      <p>Register for free & put up your Profile.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Connect</a></h4>
                      <p>Select & Connect with Matches you like.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Interact</a></h4>
                      <p>Become a Premium Member & Start a Conversation.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Marrige</a></h4>
                      <p>Get together with parents and start a new life..</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Service section -->







  <!-- Promo Banner Section -->
<!--   <section id="aa-promo-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>Find Your Best Property</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
            <a href="#" class="aa-view-btn">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Promo Banner Section -->

  <!-- Our Agent Section-->

  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-testimonial-area">
            <div class="aa-title">
              <h2>Million Happy Stories</h2>
              <span></span>
              <p><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis! --></p>
            </div>
            <!-- testimonial content -->
            <div class="aa-testimonial-content">
              <!-- testimonial slider -->
              <ul class="aa-testimonial-slider">
                <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/success-story1.jpeg" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p> Thank you VedicSahdi for making me meet my soulmate. I met my soul mate and better half through vedicshadi.com. It was a long search but was finally worth it. As soon as her profile came up on the search results, it was love at first site. Thank you VedicSahdi.com for making me meet my sweetheart! </p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>Abhay & Sakshi</p>
                      <span></span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/success-story2.jpg" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>First of all I would like to thank VedicSahdi.com for helping me found my soulmate. On 25th April 2016 I received an interest from Sachin. I went through his profile and accepted it. What I liked most about his profile was he wanted to pursue his dreams along with his partner's. We were from same cast and my set preferences met what I was looking for. Next day I became a paid member and shared my WhatsApp no. with him. After few days he contacted me via. WhatsApp and asked me to share my biodata and pics so that he can share it with his family. I did the same and slowly we started to share about our likes, dislikes, families, what we both were looking for, our future plans etc. During all this we started liking each other. Although our parents decision was also important but when God is with you, everything falls in place. He came to see me along with his parents on 23rd May 2016. Our parents agreed to this match without any issues. And finally we got engaged on 20th July 2016 and tied the knot on 29th July 2016. Once again thank you Shaadi.com for giving me love of my life. :) </p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>Jyoti & Sachin</p>
                      <span><!-- Web Designer --></span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/success-story3.jpg" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>I got an interest in my vedicshadi.com profile from her. Then I got called by her family. Later on we noticed that we are from same hometown. Its love marriage arranged by vedicshadi.com. Thanks Shadi.com. Warm Regards, Deepak & Smrati </p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>Deepak & Smrati</p>
                      <span><!-- Web Designer --></span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Client Testimonial -->

  <!-- Client brand -->
<!--   <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-4.png" alt="brand image">
                </div>
              </li>
               <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-4.png" alt="brand image">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Client brand -->

  <!-- Latest blog -->

  <!-- / Latest blog -->

  <?php require_once('footer.php');?>

  <script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>