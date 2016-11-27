
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
                    <option >Cast1</option>
                    <option >Cast1</option>
                    <option >Cast1</option>
                    <option >Cast1</option>
                  </select>
              </div>
              </div>

              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="matirian_status">
                    <option value="" selected>Matirian Status</option>
                    <option >Married</option>
                    <option >Unmarried</option>
                    <option >Divorsed</option>
                   
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

<button class="accordion">Point 1</button>
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

<button class="accordion">Point 2</button>
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

<button class="accordion">Point 3</button>
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

<button class="accordion">Point 4</button>
<div id="foo" class="panel">
  <p>First, the number of anti-feminism and men’s rights websites has increased dramatically over the past few years. Second, we see an increasing number of men who refuse to get married. As one man put it, “Why should I get married when it is such a bad business deal for men? Marriage has over a 50 percent chance of failure, and my wife can divorce me for no reason at all due to the no-fault divorce laws, and ruin me financially by taking at least half of my assets and income through the anti-male divorce courts. She can also destroy me emotionally by taking my children from me and not allowing me to ever see them again”.<br>

Just think about it- right now , at this very moment, millions of men’s lives are being destroyed by women who have filed false domestic violence (DV) charges against them, or filed false rape accusations against them, or by their ex-wives who are destroy the man’s life financially through the feminist divorce courts and are destroying the man emotionally by not allowing their fathers to see their own children! Who in their right mind would want to get married in such a system?<br>

Also, over 50 percent of American women are single, without a husband or boyfriend. I’m sure the statistics in other western countries are similar. So the vast amounts of single women is more evidence that a very large percent of men are refusing to get married.<br>

Third, an increasing number of western men are going to traditional non-feminist countries in Asia and marrying traditional asian women. I think it is this third trend towards totally opting out of modern western marriage that is the biggest slap in the face to feminist western women. I’ve heard many bitter and angry western women criticizing asian women and the western men who marry them, but it’s clear that western women are simply jealous of asian women and cannot compete with them. In case you haven’t noticed by now, asian women tend to be a lot more feminine, petite, and humble than masculine arrogant western women.<br>

And the majority of western men who are married to asian women testify that they are very happy, much happier than they ever were with western or American women.

Before we get into the substance of this essay, let me address one vital question. Most of you are probably asking “Who is Srila Prabhupada?” so let me give a brief biography.<br>

Srila Prabhupada was born in Kolkata, India, in 1896. He met Bhaktisiddhanta Saraswati Goswami in 1922, who was the foremost scholar, philosopher, and devotee in India at that time. He requested Srila Prabhupada to preach India’s pure dharma in English to the western world. So in 1965, at the age of 69 years old, Srila Prabhupada traveled to America to preach this message. He arrived in New York City and began preaching about India’s Vedic dharma and culture, and within 10 years had established over a hundred temples all over the world, with tens of thousands of followers.<br>

Srila Prabhupada’s most significant contribution, however, is his books. He published over 80 books, and translated the Srimad-Bhagavatam into English. In his Srimad-Bhagavatam translation, Srila Prabhupada addressed many issues about the modern society- politics, economics, culture, religion, spirituality, environ.</p>
</div>


<button class="accordion">Point 5</button>
<div id="foo" class="panel">
  <p>
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

            <div class="aa-title">
              <h2>Find your Special Someone</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
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
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis!</p>
            </div>
            <!-- testimonial content -->
            <div class="aa-testimonial-content">
              <!-- testimonial slider -->
              <ul class="aa-testimonial-slider">
                <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/testimonial-1.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/testimonial-3.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/testimonial-2.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
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