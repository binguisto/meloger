<?php
include "header.php";

?>
        <!-- start breadcrumb -->
        <section   class="  breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Inscription</h2>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

        <!-- start contact mail area -->
        <section  class="contact_mail_area margin-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="contact_mail">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="contact_us_page">
                            <?php 
                            if(isset($_GET['status'])){
                                switch($_GET['status']){
                                    case "email": $error = "Désolé l'email saisi existe déjà!";break;
                                    case "password" : $error = "Les mots de passe ne sont pas identiques!"; break;
                                    case "size" : $error = "Le fichier est trop volumineux!"; break;
                                    case "format" : $error = "Le fichier n'est pas une image!"; break;
                                    case "success" : $error = "Les données ont bien été enregistrées!"; break;
                                    default: $error = "Une erreur s'est produite, veuillez réessayer!";
                                }?>
                            <p class="padding-10 white-font <?= $_GET['status'] === 'success' ? 'bg-success' : 'bg-danger'; ?>"> <?= $error; ?> </p>
                            <?php }
                            ?>
                            <div class="send_mail">
                                <div class="section_title margin-bottom-40">
                                    <h4>Inscrivez-vous!!</h4>
                                </div>
                                <form action="traitement.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="Nom *" name="nom" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="Prénom(s) *" required name="prenoms">
                                        </div>
                                       
                                        <div class="col-lg-6 col-md-6">
                                                        <select class="form-control" name="sexe"   required >
                                                          <option selected="selected" disabled="disabled">Choisir sexe *</option>
                                                          <option value="M">Homme</option>
                                                          <option value="F">Femme</option>
                                                        </select>               
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                                        <select class="form-control" name="sitMat"   required >
                                                          <option selected="selected" disabled="disabled">Situation matrimoniale</option>
                                                          <option value="celibataire">Célibataire</option>
                                                          <option value="marié">Marié(e)</option>
                                                          <option value="divorcé">Divorcé(e)</option> 
                                                          <option value="veuf">Veuf/veuve</option> 
                                                        </select>               
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="Profession"   name="profession">
                                        </div>                                        
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="Adresse"   name="adresse">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="number" placeholder="Téléphone *" required name="telephone"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="email" placeholder="Email *" required name="email"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Photo</label><input  type="file" placeholder="Photo"  name="photo"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6 margin-top-32">
                                                        <select class="form-control" name="typeUser"   required >
                                                          <option selected="selected" value="user" disabled="disabled">Type d'utilisateur</option>
                                                          <option value="user">utilisateur</option>
                                                          <?php if($_SESSION){ ?>
                                                          <option value="admin">Admin</option>
                                                          <option value="superadmin">Super Admin</option> 
                                                          <?php } ?> 
                                                        </select>               
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="password" placeholder="Mot de passe *" required name="password"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="password" placeholder="Confirmer mot de passe *" required name="cpassword"/>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <!-- <a href="#" class="btn btn-warning btn-md"></a> -->
                                            <input class="btn btn-warning btn-md" type="submit" name="inscription" value="Enregistrer" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id ="room_detail_page" class="col-md-offset-1 col-lg-offset-1 col-lg-3 col-md-3 col-xs-12">
                        <!-- start hotel booking -->
                        <div class="col-lg-12 col-md-12 col-sm-4">
                            <div class="hotel_booking_area clearfix">
                                <div class="hotel_booking">
                                    <form id="form1" role="form" action="#" class="">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="room_book">
                                                <p>RECHERCHE</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-md-12 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="room">
                                                          <option selected="selected" disabled="disabled">Choisir région</option>
                                                          <option value="Single">1 Bed</option>
                                                          <option value="Double">2 Bed</option>
                                                          <option value="Deluxe">3 Bed</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="bed">
                                                          <option selected="selected" disabled="disabled">Choisir immobilier</option>
                                                          <option value="Single">Parcelle</option>
                                                          <option value="Double">Chambre</option>
                                                          <option value="Deluxe">Divers</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <a class="btn btn-warning btn-md floatright">Valider</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end hotel booking -->
                        <!-- start client says slider -->
                        <div class="col-lg-12 col-md-12 col-sm-4">
                            <div class="customer_says margin-top-65">
                                <div class="section_title margin-bottom-30">
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
                                                        <div class="customer_pic alignright-20">
                                                            <a href="#"><img src="img/customer-says-one.png" alt=""></a>
                                                        </div>
                                                        <div class="customer_identity floatright">
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
                                                        <div class="customer_pic alignright-20">
                                                            <a href="#"><img src="img/customer-says-one.png" alt=""></a>
                                                        </div>
                                                        <div class="customer_identity floatright">
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
                        <!-- end client says slider -->
                    </div>
                   
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact mail area -->
<?php include "footer.php" ?>