 <?php include "header.php" ;
if(isset($_GET["parcelle"]))
 	$art = $connexion->query("select * from articles where typeArticle ='parcelle' ");
 if(isset($_GET["terrain"]))
 	$art = $connexion->query("select * from articles where typeArticle ='terrain' ");
 if(isset($_GET["divers"]))
 	$art = $connexion->query("select * from articles where typeArticle ='divers' ");
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

								<article class="margin-bottom-30 col-md-3 col-sm-6 col-xs-12">
									<div class="single_blog_style1">
										<div class="style_blog_img_box">
											<img src="img/blog-pic1.jpg" alt="img" />
											<a class="style_b_link" href="#"><i class="fa fa-link"></i></a>
										</div>
										<div class="at_love"><i class="fa fa-heart"></i></div>
										<div class="blog_text_box">
											<h5>Restaurant Services open </h5>
											<ul class="clearfix">
												<li><a href="#">By  Admin  |</a></li>
												<li><a href="#">3 Jan 2015  |</a></li>
												<li><a href="#">3 Comment</a></li>
											</ul>
											<p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
											<a href="single-blog.html">Voir les détails</a>
										</div>
									</div>
								</article>
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php include "footer.php" ?>
 
