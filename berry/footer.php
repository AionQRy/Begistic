<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seed
 */
?>
</div><!--site-content-->

	<div class="site-footer-space"></div>
	<div class="box-to-top">
		<a href="#" class="amx-cp-back-top amx-cp-btn" id="footer-back-to-top" style="transition: opacity 0.2s ease-out;"><i class="fa fa-angle-double-up"></i> <span class="text"> Back to top</span></a>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- <div class="top-footer">
        <div class="container">
            <a href="#" class="amx-cp-back-top amx-cp-btn" id="footer-back-to-top" style="transition: opacity 0.2s ease-out;"><i class="fa fa-angle-double-up"></i> <span class="text"> Back to top</span></a>
            <div class="footer-top-components">
                    <a href="#" class="btn-transparent">Login</a>
                    <a href="#" class="btn-two"><?php //esc_html_e( 'BEGISTICS Plc.', 'berry' ); ?></a>
            </div>
        </div>
    </div> -->
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
						<div class="col-c-5 cols">
							<?php dynamic_sidebar( 'footer-1' ); ?>
							<?php
							// $img_1 = get_field('logo_footer_1', 'option');
							// $img_2 = get_field('logo_footer_2', 'option');
							// $img_3 = get_field('logo_footer_3', 'option');
							?>
							<!-- <div class="col-c-cols">
								<ul>
									<li><img src="<?php //echo $img_1['url']; ?>" alt=""></li>
									<li><img src="<?php //echo $img_2['url']; ?>" alt=""></li>
									<li><img src="<?php //echo $img_3['url']; ?>" alt=""></li>

								</ul>
							</div> -->
						</div>
						<div class="col-c-5 cols">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
						<div class="col-c-5 cols">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div>
						<div class="col-c-5 cols">
							<?php dynamic_sidebar( 'footer-4' ); ?>
						</div>
						<div class="col-c-5 cols">
							<?php dynamic_sidebar( 'footer-5' ); ?>
						</div>
						<!-- <div class="col-md-2 cols">
							<?php //dynamic_sidebar( 'footer-6' ); ?>
						</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="site-info">
					Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
				</div><!--site-info-->
				<div class="social-info">
					<ul>
						<li><a href="https://www.facebook.com/begistics" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
						<li><a href="https://www.youtube.com/begistics" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a></li>
            <li><a href="https://www.linkedin.com/company/begistics/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</a></li>
						<li><a href="tel:02-367-3570" target="_blank"><i class="fa fa-phone-square" aria-hidden="true"></i> 02-367-3570-6</a></li>
					</ul>
				</div>
			</div><!--container-->
		</div><!--main-footer-->
	</footer><!--site-footer-->

</div><!--site-canvas-->
</div><!--#page-->
<div class="form-header">
	<div class="search-box">
		<div class="search-flex">
		<a href="#" class="search-btn">
			<form role="search" method="get" class="search-form"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<label>
								<input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s">
							</label>
							<button type="submit" class="search-submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
	 </a>
	 <a href="#" id="close-tab" class="close-tab">Close Tab</a>
	 </div>
	</div>
</div>

<?php wp_footer(); ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->
<script>

jQuery(document).ready(function($) {

	$( ".detail-file table tr" )
	  .mouseover(function() {
	    $( this ).find( "td .link-detail" ).addClass('hover');
	  })
	  .mouseout(function() {
	    $( this ).find( "td .link-detail" ).removeClass('hover');
	  });

	$('#nav-toggle').click(function () {
		 $('#nav-toggle').toggleClass('active');
	});

	var isActive = false;

$('#nav-toggle').on('click', function() {
	if (isActive) {
		$(this).removeClass('active');
		$('#col-sub').removeClass('menu-open');
		$('#col-main').removeClass('col-md-8');
	} else {
		$(this).addClass('active');
		$('#col-sub').addClass('menu-open');
		$('#col-main').addClass('col-md-8');
	}
	isActive = !isActive;
});


$('.search-topbar i').click(function () {
					$('.form-header').toggleClass('active');
});
$('#close-tab').click(function () {
					$('.form-header').removeClass('active');
});
	//Change pos/background/padding/add shadow on nav when scroll event happens

	var navbar = $('#masthead');

	$(window).scroll(function(){
		if($(window).scrollTop() <= 40){
			navbar.removeClass('navbar-scroll');
		} else {
			navbar.addClass('navbar-scroll');
		}
	});



	$.fn.scrollToTop=function(){$(this).hide().removeAttr("href");
if($(window).scrollTop()!="0"){$(this).fadeIn("slow")}var scrollDiv=$(this);
$(window).scroll(function(){
	if($(window).scrollTop()=="0"){
		$(scrollDiv).fadeOut("slow")
	}else{
		$(scrollDiv).fadeIn("slow")}});
		$(this).click(function(){
			$("html, body").animate({
				scrollTop:0
			},"slow")
		})
	}

	$("#footer-to-top").scrollToTop();

		$('#ppost').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
		  autoplaySpeed: 2000,
		  infinite: true,
		  speed: 500
		});
		$('#ppost-2').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
		  autoplaySpeed: 2000,
		  infinite: true,
		  speed: 500
		});
});
</script>
</body>
</html>
