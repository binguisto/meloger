<?php include "header.php" ?>
    <!-- start main slider -->
    <div class="main_slider_area">
        <div class="container-fluid">
            <div class="row">
                <div class="main_slider" id="slider_rev">
                    <div class="fullwidthbanner-container">
                        <div class="fullwidth_home_two_banner">
                            <ul>
                                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                    <img src="img/immo.jpg" alt="slide">
                                    <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                        style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                        Bienvenue sur notre agence immobilière en ligne!!!
                                    </div>
                                    <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                        style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                        Nous avons toujours ce que vous cherchez.
                                    </div>
                                    <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack"
                                        style="background: #f7c411; padding: 10px; cursor: pointer;">
                                        <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">En savoir plus</a>
                                    </div>
                                </li>
                                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                    <img src="img/immo2.jpg" alt="slide">
                                    <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                        style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                        Vous avez la possibilité de consulter les offres, poster des offres et même faire des achats
                                    </div>
                                    <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                        style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                        sur notre plateforme et cela tous les jours, 24h/24
                                    </div>
                                    <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack"
                                        style="background: #f7c411; padding: 10px; cursor: pointer;">
                                        <a href="" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">En savoir plus</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- start hotel booking -->
                    <div class="hotel_booking_area">
                        <div class="container">
                            <div class="hotel_booking">
                                <form id="form1" method="post" role="form" action="articles.php?search" class="">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="room_book border-right-dark-1">
                                            <h6>Rechercher un</h6>
                                            <p>Article</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10">
                                        <div class="row">
                                            <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                <div class="input-group border-bottom-dark-2">
                                                    <select class="form-control" name="room" id="room">
                                                  <option selected="selected" disabled="disabled">Quelle Région</option>
                                                  <option value="Single">Region 1</option>
                                                  <option value="Double">Region 2 </option>
                                                  <option value="Deluxe">Region 3</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                <div class="input-group border-bottom-dark-2">
                                                    <select class="form-control" name="room" id="adult">
                                                  <option selected="selected" disabled="disabled">Quel Immobilier</option>
                                                  <option value="Single">Parcelle</option>
                                                  <option value="Double">Chambre</option>
                                                  <option value="Deluxe">Divers</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <button type="submit" class="btn btn-warning btn-md floatright">Rechercher</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end hotel booking -->
                </div>
            </div>
        </div>
    </div>
    <!-- end main slider -->

    <!-- start welcome section -->
    <section class="welcome_area">
        <div class="container">
            <div class="welcome">
                <br><br>
                <div class="section_title nice_title content-center">
                    <h3>Bienvenue sur notre agence immobilière en ligne!</h3>
                </div>
                <div class="section_description">
                    <p>Retrouvez chez nous des milliers d'offres immobilières. Nous vous donnons la possibilité de consulter,
                        de commander et de faire des achats sur notre plateforme.</p>
                </div>
                <div class="row text-center">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="img/room-image-five.png" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft text-left">
                                        <h6>Chambres à louer</h6>
                                        <p>20000/ <span>par mois</span></p>
                                    </div>
                                    
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Chambre Salon</h5>
                                        <p>
                                            Chambre salon sanitaire avec compteur personnel Arrière cours et bien aéré
                                        </p>
                                        <div class="single_room_cost clearfix">
                                            <div class="floatleft">
                                                <p class="text-left"> 20 000f<span>/mois minimum</span></p>
                                            </div>
                                            <div class="floatright">
                                            <a href="articles.php?chambre" class="btn">Voir</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="img/room-image-five.png" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft text-left">
                                        <h6>Parcelles</h6>
                                        <p>à partir de 500 000f</p>
                                    </div>
                                   
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Parcelles</h5>
                                        <p>
                                            Nous disposons de plusieurs parcelles avec titre foncier et à coût défiant toute concurrence
                                        </p>
                                        <div class="single_room_cost clearfix">
                                            <div class="floatleft">
                                                <p><span>A partir de </span>500 000f</p>
                                            </div>
                                            <div class="floatright">
                                            <a href="articles.php?parcelle" class="btn">Voir</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="img/room-image-five.png" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix text-left">
                                    <div class="left_room_title floatleft">
                                        <h6>Divers</h6>
                                        <p>A partir de 5000f</p>
                                    </div>
                                     
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Divers</h5>
                                        <p>
                                            Nous disposons également des plusieurs autres articles en divers, qui vous plairont certainement!
                                        </p>
                                        <div class="single_room_cost clearfix">
                                            <div class="floatleft">
                                                <p><span>A partir de </span> 5 000f</p>
                                            </div>
                                            <div class="floatright">
                                                <a href="articles.php?divers" class="btn">Voir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end welcome section -->

    <!-- start Hotel Facilities section -->
    <section class="hotel_facilities_area margin-top-115 margin-bottom-100">
        <div class="container">
            <div class="hotel_facilities">
                <div class="section_title nice_title content-center">
                    <h3>Notre Entreprise</h3>
                </div>
                <div class="hotel_facilities_content">
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#sports-club" aria-controls="sports-club" role="tab" data-toggle="tab"><br> <span>Comment ça marche? </span></a>
                            </li>
                            <li role="presentation">
                                <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><br><span>A propos</span></a>
                            </li>

                            <li role="presentation">
                                <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"> <br><span>Nous contacter</span></a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane " id="restaurant">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5 col-sm-6">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7 col-sm-6">
                                            <div class="single-tab-details">
                                                <h6>Agence immobilière</h6>
                                                <h3>Me Loger</h3>
                                                <p>
                                                    Est située en Guinée et existe depuis plus de 5ans dans plusieurs villes du pays
                                                </p>
                                                <p>
                                                    Nous offrons des services de vente, de location et d'intermédiaire
                                                </p>
                                                <div class="our_services">
                                                    <a href="#" class="margin-right-33">Disponibilité: 24h/24 et 7jrs/7</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane active" id="sports-club">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/hotel-facility-three.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">
                                                <h6>Comment ça marche chez</h6>
                                                <h3>Me Loger?</h3>
                                                <p>
                                                    Notre plateforme web propose une gamme d'articles immobiliers. Vous avez la possibilité de visualiser les images, correspondant
                                                    à chaque article, dès lors, vous pouvez commander l'article, ou même
                                                    la payer avec votre compte "Me loger Pay" sur notre site.
                                                </p>
                                                <p>
                                                    pour créer votre compte "Me loger Pay" veuillez cliquer sur le bouton
                                                    "<a
                                                        href="inscription.php">Inscription</a>"
                                                </p>
                                                <div class="our_services">
                                                    <a href="inscription.php" class="margin-right-33">Inscription gratuite</a>
                                                    <a >Accessible tous les jours 24h/24</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="pick-up">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">
                                                <h6>Comment contacter</h6>
                                                <h3>Me Loger</h3>
                                                <p>
                                                    Nous sommes joignable aux numéros suivants: 
                                                </p>
                                                <p>
                                                   Vous pouvez aussi nous contacter via le bouton "Contact" disponible dans le menu du
                                                   site web. Vous pouvez laisser votre requête puis nous vous répondons dans un très bref délai
                                                </p>
                                                <div class="our_services">
                                                    <a href="contact.php" class="margin-right-33">Contactez-nous</a>
                                                    <a>24h /24</a>
                                                </div>
                                            </div>
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
    <!-- end Hotel Facilities section -->

    <!-- start About Us section -->
    <section class="about_us_area margin-bottom-128">
        <div class="container">
            <div class="about_us clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-left-0">
                    <div class="news">
                        <div class="section_title margin-bottom-50">
                            <h5>Nouveautés</h5>
                        </div>
                        <div class="section_description">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single_content clearfix border-bottom-whitesmoke">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="img/news-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Quisque at felis port titordga</h6>
                                            </div>
                                            <div class="post_content  margin-bottom-35">
                                                <p>14 May 2014</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_content clearfix margin-top-35 border-bottom-whitesmoke">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="img/news-two.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Donec scelerisque vulputate</h6>
                                            </div>
                                            <div class="post_content margin-bottom-35">
                                                <p>15 May 2014</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_content clearfix margin-bottom-35 margin-top-35">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="img/news-three.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Curabitur varius quam lorem</h6>
                                            </div>
                                            <div class="post_content">
                                                <p>17 May 2014</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="showcase">
                        <div class="section_title margin-bottom-50">
                            <h5>Mini Galerie</h5>
                        </div>
                        <div class="section_description">
                            <div class="clearfix demo" style="">
                                <ul id="vertical" class="gallery list-unstyled">
                                    <li data-thumb="img/lightslider-img/cS-18.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-18.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-21.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-21.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-22.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-22.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-23.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-23.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-24.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-24.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-25.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-25.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-26.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-26.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-27.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-27.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="customer_says">
                        <div class="section_title margin-bottom-50">
                            <h5>Témoignages</h5>
                        </div>
                        <div class="section_description">
                            <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="single_says">
                                            <div class="customer_comment">
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <p>
                                                    Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                            </div>
                                            <div class="customer_detail clearfix">
                                                <div class="customer_pic alignleft-20">
                                                    <a href="#"><img src="img/customer-says-one.png" alt=""></a>
                                                </div>
                                                <div class="customer_identity floatleft">
                                                    <h6>John Doe</h6>
                                                    <p>www.john.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single_says">
                                            <div class="customer_comment">
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <p>
                                                    Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                            </div>
                                            <div class="customer_detail clearfix">
                                                <div class="customer_pic alignleft-20">
                                                    <a href="#"><img src="img/customer-says-one.png" alt=""></a>
                                                </div>
                                                <div class="customer_identity floatleft">
                                                    <h6>John Doe</h6>
                                                    <p>www.john.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About Us section -->
<?php include "footer.php" ?>