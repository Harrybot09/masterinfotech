<!DOCTYPE html>
<html lang="en">

<head>
    <title>Who We Are</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> 
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fixes.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_sm.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_md.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_lg.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/css/carrousel.css" />
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="/assets/images/favicon.png" type="image/gif">
    <style type="text/css">
		.slide_vertical_wrap {
			left: 0;
			top: 0;
			height: 100vh;
			overflow: hidden;
		}

		.slide_vertical_wrap img {
			vertical-align: bottom;
		}

		.section_vertical {
			margin-left: 350px;
		}

		.section_vertical header {
			background: #eee;
			padding: 20px;
			margin-bottom: 20px;
		}

		.section_vertical header h1 {
			font-size: 1.5em;
			font-weight: bold;
		}
	</style>
	
	
	
	<!-- preview-related stylesheets 
    <style>
       
       
        .scrollimage-up {
            position: absolute;
            z-index: 999;
            top: 0;
            left: 0;
            right: 0;
            bottom: 50%;
            transition: all .2s;
            background: linear-gradient(0deg, rgba(25, 30, 34, 0) 0%, rgba(25, 30, 34, 0.4) 100%);
            opacity: 0;
        }

        .scrollimage-up:hover {
            opacity: 1;
        }

        .scrollimage-down {
            position: absolute;
            z-index: 999;
            top: 50%;
            left: 0;
            right: 0;
            bottom: 0;
            transition: all .2s;
            background: linear-gradient(0deg, rgba(25, 30, 34, .4) 0%, rgba(25, 30, 34, 0) 100%);
            opacity: 0;
        }

        .scrollimage-down:hover {
            opacity: 1;
        }
		
	#move img {
    -webkit-animation: mover 25s infinite  alternate;
    animation: mover 15s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-2000px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-2000px); }
}
		
		
    </style>-->
</head>

<body>
<?php include('inc/header.php');

$stmtwho_we_are = $conn->prepare("SELECT * FROM who_we_are order by id desc limit 1");
$stmtwho_we_are->execute(); 
$who_we_are = $stmtwho_we_are->fetch();
?>
    <!-----Section 1--------->
    <section class="section-whowe" id="whoweare">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="whowe-sec">
                        <div class="whowe-text" data-aos="fade-right"  data-aos-duration="1000">
                            <h1 class="display-3">Who We <span class="color_one">Are.</span></h1>
                            <p><?php echo $who_we_are['content1']; ?>
                            </p>
                               
                        </div>
						<div class="whowe-img">
						
							<div class="slide_vertical_wrap">
								<ul class="slide_vertical">
									<li><img src="assets/images/scrollimg.jpg" alt="" /></li>
									<li><img src="assets/images/scrollimg.jpg" alt="" /></li>
								</ul>
							</div>
						<!-- <marquee  behavior="scroll" direction="up">         
								  <img src="<?php echo str_replace('../','',$who_we_are['image1']); ?>"  alt="about us"> 
							</marquee> 
                            <div id="">
                                <img src="assets/images/whoweare/scrollimg.png"  class="vert-move" alt="img" />
                             </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------section 2 ------------------>
    <section class="section-whowe-one" id="ourvision">
        <div class="container">
            <div class="row">
                <div class="col" data-aos="fade-up"  data-aos-duration="2000">
                    <div class="whowe-sec">
                        <div class="whowe-text-one">
                            <h2 class="display-3">Our Vision Is<span class="color_one"> Our Mission</span></h2>
                            <p><?php echo $who_we_are['content2']; ?>
                                <img src="<?php echo str_replace('../','',$who_we_are['image2']); ?>"
                                    class="img-responsive vision-img align-right" alt="img">
                            </p>
                        </div>
                        <div class="whowe-img-one">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section-3 -->

    <section class="our-value" data-aos="fade-up"  data-aos-duration="2000" id="ourvalue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="whowe-title">
                        <h2 class="display-3 fw-bold">Our Values, <span class="color_one"> Our Driving Force</span></h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="our-value-sec">
                        <div class="our-value-left" data-aos="fade-right"  data-aos-duration="1000">
                            <h3>Our Values, Our Driving force.
                                We let our values navigate us through <strong>success.</strong></h3>
                        </div>   
                        <div class="whowe-hr"></div>

                        <div class="our-value-right"  data-aos="fade-left"  data-aos-duration="1000">
                        <?php $data = json_decode($who_we_are['content3']);
										for($i=0; $i< count($data); $i++){ ?>
                            <div class="our-value-block" data-aos="zoom-in"  data-aos-duration="1000">
                                <h5 class="color_two"><?php echo $data[$i]->title; ?></h5>
                                <p><?php echo $data[$i]->description; ?></p>
                            </div><?php } ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- last section -->


    <div class="container">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">
                <hr class="m-app-buttom-hr color_one">
            </div>
            <div class="col-sm-2">

            </div>
        </div>
    </div>
    <?php include('inc/footer.php'); ?>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <!-- script -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="assets/js/start.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="assets/js/jquery.scrollimageinside.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="assets/js/general.js"></script>

    <!---------  end------------>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="assets/js/infiniteslidev2.js"></script>

	<script type="text/javascript">
		$(function () {
			$('.slide_vertical').infiniteslide({
				direction: 'down',
				pauseonhover: false
			});
		});
	</script>
    <!-- slider JS files -->
    <script>
        $(document).ready(function () {


            $("#smenu").click(function(){
	  $(".sm-menu").toggle();
	});
	$(".hovermenu").hover(
		function(){
					$(".bgmenuhover").show();
			});
	$(".innermenu").hover(
		function(){
					$(".bgmenuhover").show();
			},
			function(){
					$(".bgmenuhover").hide();
			}
			);

            $("#example2").click(function () {
                $(".sm-menu").toggle();
            });

            $('#example2').scrollimageinside({
                speed: 600
                
            });

            $(function () {

            $('#example2').scrollimageinside();
            });

            


        });

AOS.init();


    </script>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 2000px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


</body>

</html>