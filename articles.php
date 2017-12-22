 <?php include "header.php" ;
if(isset($_GET["parcelle"])){
 	$art = $connexion->query("select * from articles where typeArticle ='parcelle' ");
}elseif(isset($_GET["terrain"])){
 	$art = $connexion->query("select * from articles where typeArticle ='terrain' ");
}elseif(isset($_GET["divers"])){
	 $art = $connexion->query("select * from articles where typeArticle ='divers' ");
}else{
	$art = $connexion->query("select * from articles");
} 
 ?>
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>NOS ARTICLES</h2>
                        <!-- special offer start -->
                        <div class="special_offer_main">
                            <div class="container">
                                <div class="special_offer_sub">
                                    <img src="img/special-offer-yellow-main.png" alt="imf">
                                </div>
                            </div>
                        </div>         
                        <!-- end offer start -->
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <section class="blog_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="clearfix blog_inner" data-uk-grid>
							<?php foreach($art as $a){
								$req = "select nom, prenoms, image from users,images,articles where articles.user = users.id and articles.id = images.article and users.id=".$a['user']." LIMIT 1";
								$val = $connexion->query($req);
								$author = $val->fetch();

								$req2 = "select image from images where article = ".$a['id'];
								$res = $connexion->query($req2);
								$img = $res->fetch();
								?><article class="margin-bottom-30 meloger-articles col-md-3 col-sm-6 col-xs-12">
									<div class="single_blog_style1">
										<div class="style_blog_img_box">
											<img src="<?= empty($img['image']) ? 'img/blog-pic1.jpg' : $img['image'] ?>" alt="img" />
											<a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
										</div>
										<div class="at_love"><i class="fa fa-heart"></i></div>
										<div class="blog_text_box">
											<h5><?= $a['libelle'] ?> </h5>
											<ul class="clearfix">
												<li><a href="#">Par  <?= !empty($author) ? $author['prenoms'].' '.$author['nom'] : "un utilisateur" ?>  |</a></li>
												<li><a href="#"><?= $a['dateEnreg']  ?> </a></li>
											</ul>
											<p><?= $a['description']  ?></p>
											<a href="">Voir les détails</a>
										</div>
									</div>
								</article><?php } ?>

						</div>
					</div>
				</div>
			</div>
		</section>
        <?php include "footer.php" ?>
 
