<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Denz & Melo | 4 July 15</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/other_images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- vegas bg -->
    <link href="assets/js/vegas/jquery.vegas.min.css" rel="stylesheet">
    <!-- owl carousel css -->
    <link href="assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <!-- intro animations -->
    <link href="assets/js/wow/animate.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="assets/js/lightbox/css/lightbox.css" rel="stylesheet">

    <!-- styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- place your extra custom styles in this file -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="countdown.js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(14.07144, 120.83598),
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <style type="text/css">
      #Stage_jbeeb_3 {
        margin-left: 370px;
      }

      #TextBox_jbeeb_90 {
        color: #fff !important;
      }

      #TextBox_jbeeb_175 {
        color: #fff !important;
      }

      #TextBox_jbeeb_260 {
        color: #fff !important;
      }

      #TextBox_jbeeb_345 {
        color: #fff !important;
      }
    </style>
  </head>

  <body data-default-background-img="assets/images/other_images/bg1-v2.png" data-overlay="true" data-overlay-opacity="0.35">

    <!-- Outer Container -->
    <div id="outer-container">

      <!-- Left Sidebar -->
      <section id="left-sidebar">
        
        <div class="logo">
          <a href="#intro" class="link-scroll"><img src="assets/images/other_images/logo2.png" alt="Twilli Air"></a>
        </div><!-- .logo -->

        <!-- Menu Icon for smaller viewports -->
        <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

        <ul id="main-menu">
          <li id="menu-item-text" class="menu-item scroll"><a href="#text">Once Upon a fool</a></li>
          <li id="menu-item-grid" class="menu-item scroll"><a href="#featured">Save the date</a></li>
          <li id="menu-item-advenure" class="menu-item scroll"><a href="#adventures">Adventures</a></li>
          <li id="menu-item-entourage" class="menu-item scroll"><a href="#entourage">Entourage</a></li>
          <!--<<li id="menu-item-tabs" class="menu-item scroll"><a href="#tabs">Tabs</a></li>-->
          <li id="menu-item-carousel" class="menu-item scroll"><a href="#carousel">How to get there</a></li>
          <li id="menu-item-featured" class="menu-item scroll"><a href="#grid">Places to stay</a></li>
          <li id="menu-item-contact" class="menu-item scroll"><a href="#contact">RSVP</a></li>
        </ul><!-- #main-menu -->

      </section><!-- #left-sidebar -->
      <!-- end: Left Sidebar -->

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg1-v2.png">
          <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-sm-10 col-md-9 pull-right">

                <section class="feature-text">
                  <h2 Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">#DMGreatestAdventure</h2>
                  <p>
                <?php
                    $timeFirst  = strtotime('2015-07-04 08:00:00');
                    $timeSecond = strtotime("now");
                    $differenceInSeconds = $timeSecond - $timeFirst;
                  print 'var timeDiff = '.$differenceInSeconds;
                  ?>
                  <script>
                  var myCountdown1 = new Countdown({
                  time: timeDiff,//86400 * diffDays,
                  width:300, 
                  height:60,  
                  rangeHi:"day",
                  style:"flip"  // <- no comma on last item!
                  });</script></p>
                  <p>It's so great to find that one special person you want to annoy for the rest of your life. <br />- Rita Rudner </p>
                  <p> <a href="#contact"><h4> Save the Date<br /> 04.07.15 </h4> </a> </p>
                  <p><a href="#text" class="link-scroll btn btn-outline-inverse btn-lg">Our Lovestory</a></p>
                </section>

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="text" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg3.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h3 class="section-title" Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">Once a fool, now two fools</h3>

                <p class="feature-paragraph">He lives in Pasig, she lives in Makati; but they both went to Rizal High School. They had common friends; but they weren’t really introduced.</p>
                <p>He has a friend: it was her boyfriend. She has a friend, it was his girlfriend. Seven years after, social networking brought them into each other’s way; Became friends in Facebook and chatted in Y Messenger – everyday.</p>
                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-1');" class="btn btn-outline-inverse btn-sm">now two fools...</a></p>
                
                <div class="content-to-populate-in-modal" id="modal-content-1">
                  <h3 class="section-title">Once a fool, now two fools</h3>
                  <p><img data-img-src="assets/images/other_images/bg4.jpg" class="lazy rounded_border hover_effect pull-right" alt="Lorem Ipsum">He lives in Pasig, she lives in Makati; but they both went to Rizal High School. He has friends, his friends are her friends too; but they weren’t really introduced.</p>
                  <p style="margin:0;text-align:left;">He has a friend: <br/>it was her boyfriend.<br/> She has a friend;<br/>it was his girlfriend. </p> 
                  <p>Seven years after, social networking brought them into each other’s way; Became friends in Facebook and chatted in Y Messenger – everyday.<br/> That link started the mutual stalking, <br/>and companionship they have been enjoying, <br/>a meaningful friendship since 29 June 2010, <br/>their similarities they amplified since then.</p>
                  <p style="margin:0;text-align:right;"> <img data-img-src="assets/images/other_images/bg1-v2.jpg" class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum"> It has grown to love, <br/>yet a love about to end <br/>before it even matured. <br/>She will be working overseas;<br/>long distance, a journey which many said is never easy, <br/>a relationship which family and friends said not to take seriously; <br/>a decision proven to be a lot more challenging in reality.</p>
                  <p>He gave up on them, she let go of him. <br/>Yet... <br/>He realized existence is more meaningful if spent with her; <br/>She realized that being, is better with him. <br/>They realized: breathing comes as natural as their love for each other.</p>
                  <p>AFTER Two years and six months;<br/>he pursued his career with her. <br/>He chased a life spent with her in which no miles can hinder. <br/>A final goodbye to the “See you again!” and “Farewells!” <br/>A permanent hello to “Ni Hao Ma” in Singapore. <br/>His hunt was beyond his dreams; <h6>it was a pursuit for the woman of his dreams.</h6></p>
                  <p>Four years of laughter and tears; <br/>of fights and reconciliations,<br/> of settling differences and meeting half ways,<br/>of adventures and misadventures.</p>
                  <p>On a Boracay boat ride, the start of their greatest adventure. <br/>His father proposed to her. <br/>His father asked for her hand in marriage. <br/>His father, who will soon be her father, <br/>surrounded by his family, who will soon be her family.</P>
                  <p>Tearfully overwhelmed, she nodded and smiled<br/>He gave her the ring, <br/>their family was delighted.</p>
                  <h6>But wait, it was on the April fool’s day. <br/>So do not be misled.</h6>
                  <p>But please do come at the Transfiguration Chapel of Calaruega in Batangas City on the 4th of July 2015.</p> <p> It is no longer a fool’s day. <br/>Because on that day, it will be a two fools’ day!</p>
                  <h4>Dennis and Melo will forever be fools about each other!</h4>
                </div><!-- #modal-content-1 -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="featured" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/DSC_5442.png">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title" Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">Save the Date!</h1>
              
                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                  <!-- feature 1 -->
                  <!--<article class="feature-col col-md-4">-->
                   <iframe src="https://player.vimeo.com/video/129446049" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  <!--</article>-->

                </section><!-- end: .feature-columns -->

              <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper --> 

        <article id="adventures" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/DSC_5442.png">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title" Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">Our Adventures!</h1>
              
                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                  <!-- feature 1 -->
                  <!--<article class="feature-col col-md-4">-->
                  <iframe src="https://player.vimeo.com/video/129956879" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  <!--</article>-->

                </section><!-- end: .feature-columns -->

              <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->    

        <article id="entourage" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/DSC_5742.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 class="section-title" Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">Our Entourage</h1>

                <p class="feature-paragraph">These are the important people in our lives who have significant contributions to our lovestory.</p>
                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-entourage');" class="btn btn-outline-inverse btn-sm">who they are</a></p>
                
                <div class="content-to-populate-in-modal" id="modal-content-entourage">
                  <h3 class="section-title">Our Entourage</h3>
                  <p>
                    Groom's Father : Juan Palmenco <br/>
                    Groom's Mother : Librada Palmenco &#10013;<br/><br/>
                    Bride's Father : Eduardo Tiempo <br/>
                    Bride's Mother : Concepcion Tiempo <br/><br/>
                    Male Principal Sponsors: <br/>
                    Ronaldo Evano Buitizon <br/>
                    Ryan Fisico Gonzales <br/>
                    Isagani A. Geronimo <br/><br/>
                    Female Principal Sponsors: <br/>
                    Erlinda Mancio <br/>
                    Ria Gersilia Gonzales <br/>
                    Benilda Bugagao <br/>
                    Riza B. Formilleza <br/>
                    Espelita S. Domine <br/>
                    Magdalena H. Guiriba <br/><br/>
                    Candle Sponsors <br/>
                    Ian Toledo and Benj Toledo <br/><br/>
                    Veil Sponsors <br/>
                    Duarben  Tiempo and Sheila Marie Pagtama <br/><br/>
                    Cord Sponsors <br/>
                    JM Dela Cruz and Cherrie Mae Cruz <br/><br/>
                    Groomsmen <br/>
                    Chris Cagaanan <br/>
                    Dalvin Chapoco <br/>
                    Herz Garlan <br/>
                    Jeriel Enrile <br/>
                    KC Camahalan <br/>
                    Lawrence Mr. Popo Rodriguez <br/>
                    Paolo Reyes <br/>
                    Ryan Pagunsan <br/>
                    Marc Urquiola <br/><br/>
                    Bridesmaid <br/>
                    Ashpot Torres <br/>
                    Des Diosa Dizon <br/>
                    Ruby Jean 'Roar' Flores <br/>
                    Teena Narbay <br/>
                    Fleur Santos <br/>
                    Kath " SEXY" Inciong <br/>
                    Ninang Jopang Hosena <br/>
                    Vern Cabarloc <br/>
                    Meli Eco <br/><br/>
                    Ring Bearer: Chivas Palmenco <br/><br/>
                    Coin Bearer: Hennessey  Palmenco <br/><br/>
                    Bible Bearer: Rein Buitizon <br/><br/>
                    Banner Bearer: Ethan Rafael and Guillano Santos <br/><br/>
                    Flower Girls: Kakai Real and Penny  Santos
                  </p>
                </div><!-- #modal-content-1 -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="carousel" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/DSC_5788.png">
          <div class="content-wrapper clearfix">

              <div id="features-carousel" class="carousel slide with-title-indicators max-height" data-height-percent="70" data-ride="carousel">
                
                <!-- Indicators - slide navigation -->
                <ol class="carousel-indicators title-indicators">
                  <li data-target="#features-carousel" data-slide-to="0" class="active">Directions</li>
                  <li data-target="#features-carousel" data-slide-to="1">The Wedding</li>
                  <li data-target="#features-carousel" data-slide-to="2">Reception</li>
                  <!--<li data-target="#features-carousel" data-slide-to="3">Directions</li>-->
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <div class="carousel-text-content">
                      <img src="assets/images/other_images/transp-image1.png" class="icon" alt="Lorem Ipsum">
                      <h2 class="title" Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">Getting there</h2>
                      <!--<p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio.</p>-->
                      <p>
                        <div id="map-canvas"></div>
                      </p>
                      <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-2');" class="btn btn-outline-inverse btn-sm">directions</a></p>

                      <div class="content-to-populate-in-modal" id="modal-content-2">
                        <h4>HOW TO GET THERE FROM MANILA:</h4>
                        <p><img data-img-src="assets/images/other_images/map.png" class="lazy rounded_border hover_effect pull-left" alt="Map"></p>
                        <p>VIA SLEX (South Luzon Expressway):</p>
                        <p> Take Sta. Rosa exit and turn right after the toll. Go straight and turn right after Tagaytay Market, and proceed towards Tagaytay Rotonda. Go straight and continue until the Nasugbu Arch (it’s a bit of a long drive!). Turn left towards Evercrest and Chapel on the Hill Don Bosco, then turn right when you see the sign pointing to Calaruega. Continue down the road until you reach Calaruega at the end.</p>
                        <p>VIA COASTAL ROAD: </p>
                        <p>From Roxas Blvd. in Manila, proceed to Aguinaldo Hi-Way all the way up to Tagaytay</p>
                        <p>VIA PUBLIC TRANSPORT: </p>
                        <p>Proceed to CROW Bus Terminal along EDSA in Pasay. Board buses going to any of these destinations: Nasugbu, Balayan or Calatagan. Get off at Ever Crest, Batulao, Nasugbu Batangas. Tricycle Service is available at Evercrest entrance or hike through a 2km road to Calaruega.</p>
                        <p>CONTACT INFORMATION</p>
                        <p>Calaruega, The Transfiguration Chapel<br/>
                        Address: Brgy. Kaylaway, Batulao, Nasugbu, Batangas<br/>
                        Mail: calaruega_philippines@yahoo.com<br/>
                        </p>
                      </div><!-- #modal-content-2 -->
                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/other_images/transp-image2.png" class="icon" alt="Lorem Ipsum">
                      <h2 class="title" Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">The Wedding</h2>
                      <p><h5>The Transfiguration Chapel in Calaruega</h5> <h6> at 2:30 pm </h6> <br/>The wedding ceremony will take place just a little outside Tagaytay. The church is small and off the beaten track, but we like how intimate it is, and how it’s nestled on top of a hill surrounded by gardens and a view of the countryside (plus our friends who’ve been married there have happy marriages, and I guess we’re a bit superstitious that way!)
                      </p>
                      <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-3');" class="btn btn-outline-inverse btn-sm">more about the venue</a></p>

                      <div class="content-to-populate-in-modal" id="modal-content-3">
                        <h1>The Wedding</h1>
                        <p><img data-img-src="assets/images/other_images/thechurch.png" class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">The ceremony will take place at <h5>2:30 pm at The Transfiguration Chapel in Calaruega</h5>, just a little outside Tagaytay. The church is small and off the beaten track, but we like how intimate it is, and how it’s nestled on top of a hill surrounded by gardens and a view of the countryside (plus our friends who’ve been married there have happy marriages, and I guess we’re a bit superstitious that way!) It’s worth coming a little early so you have time to wander the gardens.
                        For older guests who don’t want to take the scenic route from the main entrance near the fountain (it’s beautiful, but it’s a bit of a walk) there’s a small gate right next to the chapel from the road to save you the trouble of taking the stairs.</p>
                      </div><!-- #modal-content-3 -->
                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/other_images/transp-image7.png" class="icon" alt="Reception">
                      <h2 class="title" Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">Reception</h2>
                      <p>If there’s one thing we want our guests to have at the reception,<br/>it’s GOOD FOOD! <br/>(it’s what we Filipinos really remember, right?) <br/>Which is why we chose to hold the reception at <h5>Rosemont Gardens</h5> <br/>Km 67 General Aguinaldo Highway, Alfonso, 4123 Cavite <br/> <h6>at 6:30 pm</h6></p>
                      <!--<p><a href="" onclick="populate_and_open_modal(event, 'modal-content-4');" class="btn btn-outline-inverse btn-sm">read more</a></p>

                      <div class="content-to-populate-in-modal" id="modal-content-4">
                        <h1>Reception</h1>
                        <p><img data-img-src="assets/images/other_images/reception.png" class="lazy rounded_border hover_effect pull-left" alt="Reception">If there’s one thing we want our guests to have at the reception, it’s GOOD FOOD! (it’s what we Filipinos really remember, right?) Which is why we chose to hold the reception in Antonio’s, (the Philippine’s best garden restaurant and one of the top 5 restaurants in Asia, so says the Miele guide).</p>
                        <p>Once again, it’s off the beaten track (you’ll have to drive down a narrow, wiggly road to get there) but hopefully you’ll find it worth the trip (fingers crossed).</p>
                      </div>--><!-- #modal-content-4 -->
                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/other_images/transp-image5.png" class="icon" alt="Get there">
                      <h2 class="title">How to get there</h2>
                      <p>From the Church: Drive back towards the main road, and drive towards the direction of Tagaytay City. Look for the Antonio’s and Breakfast at Antonio’s sign on the left side of the road. Turn left and follow the Antonio’s road signs. Antonio’s is about 2 km from the main road.</p>
                      <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-5');" class="btn btn-outline-inverse btn-sm">read more</a></p>

                      <div class="content-to-populate-in-modal" id="modal-content-5">
                        <h1>How to get there</h1>
                        <p><!--<img data-img-src="assets/images/other_images/transp-image4.png" class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">-->
                        <p>From the Church:</p> Drive back towards the main road, and drive towards the direction of Tagaytay City. Look for the Antonio’s and Breakfast at Antonio’s sign on the left side of the road. Turn left and follow the Antonio’s road signs. Antonio’s is about 2 km from the main road.</p>
                        <p>From the Tagaytay Rotonda:</p> 
                        <p>Exit via Majarlika Highway leading to Batangas. Drive past the Taal Vista Hotel and Casino Filipino. Go straight past the Mendez crossing, marked by a Total Gas Station and a Mercury Drug. Continue past Bag of Beans. When you see the large radar antennas on the left side, look for the Antonio’s and Breakfast at Antonio’s sign on the right side of the road. Turn right and follow the Antonio’s road signs.</p>
                        <p>
                          Antonio’s Address: Brgy Neogan,Tagaytay, Tagaytay
                          Contact: 0917 899 2866
                        </p>
                      </div><!-- #modal-content-5 -->
                    </div>
                  </div><!-- .item -->

                </div><!-- .carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#features-carousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#features-carousel" data-slide="next"></a>

              </div><!-- #about-carousel -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="grid" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg5.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 col-md-10 pull-right">

                <h1 class="section-title"Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">Places to stay</h1>
                
                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols">

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon fa fa-anchor"></span>
                      <div class="text-content">
                        <h5>Chateau Royale Sports and Country Club</h5>
                        <p>Located in Tagaytay, Chateau Royale Sports and Country Club is in a rural location and close to Caleruega Church and Spendido Golf Course.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon fa fa-bell"></span>
                      <div class="text-content">
                        <h5>MC Mountain Home Apartelle</h5>
                        <p>When you stay at MC Mountain Home Apartelle in Tagaytay, you'll be on the Strip and convenient to Spendido Golf Course and Caleruega Church.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon fa fa-bed"></span>
                      <div class="text-content">
                        <h5>Sunrise Holiday Mansion</h5>
                        <p>When you stay at Sunrise Holiday Mansion in Tagaytay, you'll be in the mountains and convenient to Spendido Golf Course and Caleruega Church. </p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon fa fa-diamond"></span>
                      <div class="text-content">
                        <h5>Mediterranean House Restaurant & Hotel</h5>
                        <p>When you stay at Mediterranean House Restaurant & Hotel in Alfonso, you'll be convenient to Caleruega Church. </p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                    <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon fa fa-bullhorn"></span>
                      <div class="text-content">
                        <h5>Summit Ridge Tagaytay</h5>
                        <p>When you stay at Days Inn Tagaytay in Tagaytay, you'll be minutes from Summit Ridge Promenade.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon fa fa-cog"></span>
                      <div class="text-content">
                        <h5>Days Inn Tagaytay</h5>
                        <p>When you stay at The Lake Hotel Tagaytay in Tagaytay, you'll be on a lake and convenient to Summit Ridge Promenade.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                </section><!-- end: grid -->

            </div><!-- .col-sm-11 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="contact" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/DSC_5983.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
              <h1 class="section-title"Style="color: #ED1C24;text-shadow: 1px 1px 1px #fff;">RSVP</h1>
              
                <!-- CONTACT DETAILS -->
                <!--<div class="contact-details col-sm-5 col-md-3">-->
                  <p>Confirmations only. Please reply by <h5>15 June 2015 </h5>
                    <br>Dennis - Viber: +65 92366485
                    </br>Melo - Viber: +65 93202726 
                   </br>
                  <a href="mailto:mmbtiempo@yahoo.com">mmbtiempo@yahoo.com</a></p>
                <!--</div>-->
                <!-- END: CONTACT DETAILS -->
                <div class="contact-details col-sm-5 col-md-3"></div>
                <!-- CONTACT FORM -->
                <!--col-sm-7 col-md-9-->
                  <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
                  <form class="form-style validate-form clearfix" action="assets/php/mail.php" method="POST" role="form">

                    <!-- form left col -->
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" class="text-field form-control validate-field required" data-validation-type="string" id="form-name" placeholder="Full Name" name="name">
                      </div>  
                      <!--<div class="form-group">
                        <input type="email" class="text-field form-control validate-field required" data-validation-type="email" id="form-email" placeholder="Email Address" name="email">
                      </div>-->
                      <div class="form-group">
                        <input type="tel" class="text-field form-control validate-field phone" data-validation-type="phone" id="form-contact-number" placeholder="Contact Number" name="contact_number">
                      </div>    
                      <!--<div class="form-group text-right">
                        <img id="form-captcha-img" src="assets/php/form_captcha/captcha_img.php">
                        <input type="text" class="text-field form-control validate-field required" data-validation-type="captcha" id="form-captcha" placeholder="Enter text" name="captcha">
                        <span id="form-captcha-refresh" class="fa fa-refresh" title="Reload"></span>
                      </div>-->
                      <div class="form-group">
                        <img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
                        <button type="submit" class="btn btn-sm btn-outline-inverse">Submit</button>
                      </div> 
                      <div class="form-group form-general-error-container"></div>                                  
                    </div><!-- end: form left col -->

                    <!-- form right col -->
                    <!--<<div class="col-md-6">
                      div class="form-group">
                        <textarea placeholder="Message..." class="form-control validate-field required" name="message"></textarea>
                      </div>
                      <div class="form-group">
                        <img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
                        <button type="submit" class="btn btn-sm btn-outline-inverse">Submit</button>
                      </div> 
                      <div class="form-group form-general-error-container"></div>           
                    </div>--><!-- end: form right col -->

                  </form>
                </div><!-- end: CONTACT FORM -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
          <li><a href="#" target="_blank" title="Facebook"><img src="assets/images/theme_images/social_icons/facebook.png" alt="Facebook"></a></li>
          <li><a href="#" target="_blank" title="Twitter"><img src="assets/images/theme_images/social_icons/twitter.png" alt="Twitter"></a></li>
          <li><a href="#" target="_blank" title="Google+"><img src="assets/images/theme_images/social_icons/googleplus.png" alt="Google+"></a></li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">&copy; Dennis & Melo | 04-07-2015</div>
      </section>
      <!-- end: Footer -->      

    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body clearfix">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->    

    <!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="assets/js/vegas/jquery.vegas.min.js"></script>

    <!-- detect mobile browsers -->
    <script src="assets/js/detectmobilebrowser.js"></script>

    <!-- detect scrolling -->
    <script src="assets/js/jquery.scrollstop.min.js"></script>

    <!-- owl carousel js -->
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- lightbox js -->
    <script src="assets/js/lightbox/js/lightbox.min.js"></script>

    <!-- intro animations -->
    <script src="assets/js/wow/wow.min.js"></script>

    <!-- responsive videos -->
    <script src="assets/js/jquery.fitvids.js"></script>

    <!-- Custom functions for this theme -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/initialise-functions.js"></script>

    <!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]-->  

  </body>
</html>