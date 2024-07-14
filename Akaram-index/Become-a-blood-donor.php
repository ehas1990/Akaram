<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ASYC-Become-A-BLOOD-DONOR</title>

  <!--Essential css files-->
 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
        .district-option {
            color: blue;
            font-weight: bold;
        }
    </style>

  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/fancybox.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/customstyle.css">

  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.html">
  <!-- form validation -->

<script type="text/javascript">
function submitUserSignUp()
{
	var gen = document.getElementById('gen').value;
	if (gen == "gen") {
		alert("Please choose Gender");
	}
	var state1 = document.getElementById('state').value;
	if (state1 == "Select") {
		alert("Please choose State");
	}
	var district1 = document.getElementById('district').value;
	if (district1 == "Select") {
		alert("Please choose District");
	}
	var city1 = document.getElementById('city').value;
	if (city1 == "Select") {
		alert("Please choose City");
	}
	var blood = document.getElementById('blood').value;
	if (blood == "blood") {
		alert("Please choose Blood group");
	}
	
}
function autoSubmit(value)
{
   // var district = null; 
var state = document.getElementById("state").value;
if(value == 'district') {
var district = document.getElementById("district").value; 
}
if (value == 'state') {
		var dataString = 'st=' + state;
		var i = 1;
						}
if (value == 'district') {
		var dataString = 'dist=' + district;	
		var i = 2;
		}

$.ajax({
type: "POST",
url: "demo"+i+".php",
data: dataString,
cache: false,
success: function(rslt) {
	if (i == 1) {
	//$('#district-list').append('<option value=""'+'"style="color: blue; font-weight: bold;"">Select district</option>');
	$('#district-list').html(rslt);

				}
	else {
	$('#city-list').html(rslt);
		}
		}
});
//}
//return false;
}

</script>


</head>
<body>
  <!--preloader start-->
  <div class="preloader">
    <h1><a href="index.html"><img src="assets/images/akaram_logo.png" class="logo-preloder"></a></h1>
    <h1>ASYC</h1>
    <div class="preload-progress">
      <span></span>
    </div>
  </div>
  <!--preloader end-->

  <!-- scroll to top -->
  <div class="progress-wrap cursor-pointer active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 221.377;">
      </path>
    </svg>
  </div>
  <!-- scroll to top -->

  <!-- header start -->
  <header>
    <div class="header_top d-none d-lg-block d-xl-block d-xxl-block">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_content">
              <span><i class="fa-solid fa-phone"></i></span>
              <a href="tel:+917550359907">+91 7550359907</a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_content">
              <span><i class="fa-solid fa-envelope"></i></span>
              <a href="mailto:akaramdonors14@gmail.com">akaramdonors14@gmail.com</a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_content">
              <span><i class="fa-solid fa-location-dot"></i></span>
              <a href="#">cuddalore(d.t)-607 108</a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_social">
              <p>Follow Now</p>
              <ul class="d-flex">
                <li><a href="https://www.facebook.com/p/Akaram-Students-Youth-Club-100064605135514/?paipv=0&eav=AfazY2gITCqbMugS_woOYaQ1z-V5yOncytfUEtwUZpQ0jSj4zcMJ1sdWt3fzfUleU8w&_rdr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_bottom">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-xl-2 col-lg-2 col-md-4 col-6">
            <div class="header_logo">
              <a href="index.html"><img src="assets/images/akaram_logo.png" alt="images not founds" class="img-fluid"></a>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8 d-none d-xxl-block d-xl-block">
            <ul class="main_menu">
              <li class="position-relative">
                <a href="index.html">Home</a>
              
              </li>
              <li><a href="about.html">About Us</a></li>
              <li class="position-relative">
                <a href="javascript:void(0)">Join Hands <i class="fa-solid fa-angle-down"></i></a>
               	
                <ul class="submenu_wrapper">
                  <li><a href="Become-a-blood-donor.html">Become A Blood Donar</a></li>
                  <li><a href="donor-dictionary.html">Donar Dictionary</a></li>
                </ul>
              </li>
 		
              <!--
              <li>
                <a href="javascript:void(0)">Pages <i class="fa-solid fa-angle-down"></i></a>
                <div class="bi_megamenu">
                  <div class="megamenu_row">
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Home</h6>
                      <ul class="pages_list">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index-3.html">Home 2</a></li>
                        <li><a href="index-4.html">Home 3</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Pages</h6>
                      <ul class="pages_list">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="team-member.html">Team Member</a></li>
                        <li><a href="terms.html">Terms & Condation</a></li>
                        <li><a href="privacypolicy.html">Privacy Policy</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Pages</h6>
                      <ul class="pages_list">
                        <li><a href="photo-gallary.html">photo-gallary</a></li>
                        <li><a href="faq.html">faq</a></li>
                        <li><a href="campaign.html">Campaign</a></li>
                        <li><a href="campaign-details.html">Campaign Details</a></li>
                        <li><a href="donate.html">Donate</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="register.html">Contract</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Blog</h6>
                      <ul class="pages_list">
                        <li><a href="blog-default.html">Blog Default</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                        <li><a href="blog-style1.html">Blog Style 1</a></li>
                        <li><a href="blog-style2.html">Blog style 2</a></li>
                        <li><a href="blog-details-left-sidebar.html">Blog Leftsidebar</a></li>
                        <li><a href="blog-details-right-sidebar.html">Blog Rightsidebar</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column banner">
                      <div class="megamenu-banner img">
                        <div class="row ">
                          <div class="col-12">
                            <div class="fblog_img img">
                              <a href="blog-details.html"><img src="assets/images/f1.jpg" class="w-100" alt=""></a>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="fblog_content">
                              <a href="blog-details.html"> A Formula For Help And Happiness</a>
                              <span>18 February, 2022</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              -->

              <li class="position-relative">
                <a href="photo-gallary.html">Gallery</a>

              </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>        
          <div class="col-xl-2 col-lg-2  d-none d-xxl-block d-xl-block">
            <div class="header_search_menu d-flex">
           

         
              <ul class="main_menu">
                <li class="position-relative">
                  <a> Login <i class="fa-solid fa-angle-down"></i></a>
                  <ul class="submenu_wrapper">
                    <li><a href="register.html">Donor</a></li>
                    <li><a href="donate.html">Blood Bank</a></li>
                  </ul>
                </li>
              </ul>
              
              <!-- right offcanvas -->
              <div class="offcanvas_right">
                <button class="header_toggle_btn bg-transparent offcanvas_btn" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <!-- mobile menu bar -->
          <div class="col-lg-10 col-md-8 col-6 d-block d-xxl-none d-xl-none">
            <div class="d-flex align-items-center gap-2 justify-content-end">
              <div class="dropdown dropdown_search">
                <button class="search-btn " data-bs-toggle="dropdown" aria-expanded="true"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                  <!--<form class="search-form d-flex align-items-center gap-2">
                    <input type="text" placeholder="Search..." class="theme-input bg-transparent">
                    <button type="submit" class="submit-btn">Go</button>
                  </form>-->
                </div>
              </div>
              <div class="mobile_menu">
                <button class="header_toggle_btn bg-transparent border-0" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas-mobile">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->
  <!-- breadcrumb start -->
  <div class="breadcrumb_section overflow-hidden ptb-150">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 text-center">
          <h2>Become A Blood Donar</h2>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li class="active">Become A Blood Donar</li>
          </ul>
                   </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb end -->
  <!-- donate form start -->
  <div class="gray_bg ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-11 col-12">
              <div class="km__donate__form">
                
                <div class="km__form__donat">
                  <form name="form" id="form" action="try.php" method="post">
                  <fieldset>
                    <div class="row">
                      <div class="col-12 col-sm-12">
                        <input name="name" type="text" placeholder="First Name" required=""  maxlength="20">
                      </div>
                      
                    </div>
                    <div class="row g-4">
                      <div class="col-12 col-sm-6">
                        <input name="email" type="email" placeholder="Email" required="">
                      </div>
                      <div class="col-12 col-sm-6">
                        <input name="mobile" placeholder="10 digit Mobile No" required="" type="number" maxlength="10">
                      </div>
                    </div>
                    <div class="row g-4">
                      <div class="col-12 col-sm-6">
                        <select class="nice_select" id="gen" name="gen">
                          <option value="gen" selected disabled>Select Gender</option>
                          <option value="Male">MALE</option>
                          <option value="Female">FEMALE</option>
                         
                          
                        </select>
                      </div>
                      <div class="col-12 col-sm-6">
                        
                        <input name="dob" id="dobInput" type="date" placeholder="DOB" required="">
                      </div>
                    </div> 
                    <div class="row g-4">
                      <div class="col-12 col-sm-6">
                        <select name="state" id="state" onChange="autoSubmit('state');" class="nice_select">
                          <option value="Select">Select State</option>
                          <option value=1>		Andaman & Nicobar Islands</option><option value=2>		Andhra Pradesh</option><option value=3>		Arunachal Pradesh</option><option value=4>		Assam</option><option value=5>		Bihar</option><option value=6>		Chandigarh</option><option value=7>		Chhattisgarh</option><option value=8>		Dadra & Nagar Haveli</option><option value=9>		Daman & Diu</option><option value=10>		Delhi</option><option value=11>		Goa</option><option value=12>		Gujarat</option><option value=13>		Haryana</option><option value=14>		Himachal Pradesh</option><option value=15>		Jammu & Kashmir</option><option value=16>		Jharkhand</option><option value=17>		Karnataka</option><option value=18>		Kerala</option><option value=19>		Lakshadweep</option><option value=20>		Madhya Pradesh</option><option value=21>		Maharashtra</option><option value=22>		Manipur</option><option value=23>		Meghalaya</option><option value=24>		Mizoram</option><option value=25>		Nagaland</option><option value=26>		Odisha</option><option value=27>		Puducherry</option><option value=28>		Punjab</option><option value=29>		Rajasthan</option><option value=30>		Sikkim</option><option value=31>		Tamil Nadu</option><option value=32>		Tripura</option><option value=33>		Uttar Pradesh</option><option value=34>		Uttarakhand</option><option value=35>		West Bengal</option>        </select>
                      
                      </div>
                      <div class="col-12 col-sm-6">
					               	<input name="pin" id="zipcodeInput" placeholder="Pincode" required="" type="number" maxlength="6">
                      </div>
                    </div>
                    
                    <div class="row g-4">
                          <div class="col-12 col-sm-6" id="district-list">
                          
                          </div>
                          <div class="col-12 col-sm-6" id="city-list">
                            
                          </div>
                    </div>
                    <div class="row g-4">
                      <div class="col">
                        <textarea name="addone" placeholder="Address" rows="1" required=""></textarea>
                      </div>
                    </div>
                    <div class="row g-4 ">
                      <div class="col-12 col-sm-6">
                        <select name="bgroup" id="blood" class="nice_select">
                          <option value="blood" disabled selected>Select Blood group</option>
                          <option value="APos">A+</option>
                          <option value="ANeg">A-</option>
                          <option value="BPos">B+</option>
                          <option value="BNeg">B-</option>
                          <option value="ABPos">AB+</option>
                          <option value="ABNeg">AB-</option>
                          <option value="OPos">O+</option>
                          <option value="ONeg">O-</option>
                          <option value="A1Pos">A1+</option>
                          <option value="A1Neg">A1-</option>
                          <option value="A2Pos">A2+</option>
                          <option value="A2Neg">A2-</option>
                          <option value="A1BPos">A1B+</option>
                          <option value="A1BNeg">A1B-</option>
                      </select>

                      </div>
                      <div class="col-12 col-sm-6">
                        <select name="donate_e" id="bloodgroup" class="nice_select" required="">
                          <option value="" disabled selected>Interested in donating eyes</option>
                          <option value="Eye">Yes</option>
                          <option value="No">No</option>
                         
                      </select>
                      </div>
                </div>
                  <div class="row mt-5 text-center">
                     <div class="col">
                      <input name="submit" type="submit" id="submit" value="Register Now" onClick="submitUserSignUp();">
                     </div>
                  </div>
             </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
    
    </div>
  </div>
  <!-- donate form start -->
  <!-- footer section start -->
  <footer>
    <div class="footer_top pt-115">
      <div class="container ">
        <div class="row border-bottom justify-content-center">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
            <div class="footer_content">
              <h5>About Us</h5>
              <p>
                Akaram Students and Youth Club is dedicated to serving the community through our Blood Bank and Eye Bank services. Join us in making a difference by saving lives and promoting a culture of giving.
              </p>
             
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 col-6 mb-4">
            <div class="footer_content">
              <h5>Quick Links</h5>
              <ul>
                <li><a href="index.html"><i class="fa-solid fa-angles-right"></i> Home </a></li>
                <li><a href="about.html"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                <li><a href="photo-gallary.html"><i class="fa-solid fa-angles-right"></i> Gallery</a></li>
                
                <li><a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-6 mb-4">
            <div class="footer_content">
              <h5>Our Services</h5>
              <ul>
                <li><a href="Become-a-blood-donor.php"><i class="fa-solid fa-angles-right"></i> Become A Blood Donor</a></li>
                <li><a href="donor-dictionary.php"><i class="fa-solid fa-angles-right"></i> Donor Dictionary</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Total Visitors:<span id="visitorCount" class="ml-2">0</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="footer_content">
              <h5>Address</h5>
              
              <ul>
                <li><span>Address:</span>No.29,Main road,pudupetai, panruti(t.k),cuddalore(d.t)-607 108</li>
                <li><span>Phone:</span>+91 7550359907</li>
                <li><span>Email:</span> akaramdonors14@gmail.com</li>
                
              </ul>
            </div>
            </div>
          </div>
        </div>
        <!-- <div class="row footer_middle">
          <div class="col-xl-6 col-lg-6 col-12 mb-5">
            <div class="footer_subscrive">
              <h6>Subscribe us for more update & news !!</h6>
              <form action="#">
                <input type="email" placeholder="Enter Your Email">
                <button class="red_btn" type="submit">Subscribe</button>
              </form>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-12">
            <div class="footer_social">
              <ul
                class="social_icon d-flex justify-content-xxl-end justify-content-xl-end justify-content-lg-end justify-content-center  gap-2">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
              </ul>
              <ul
                class="page_link d-flex justify-content-xxl-end justify-content-xl-end justify-content-lg-end justify-content-center gap-2 flex-wrap">
                <li><a href="privacypolicy.html">Privacy Policy</a></li>
                <li><a href="#">/</a></li>
                <li><a href="terms.html">Terms & Condition</a></li>
                <li><a href="#">/</a></li>
                <li><a href="faq.html">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>Copyright &copy; 2024 ASYC . All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->

  <!-- mobile menu offcanvas -->
  <div class="offcanvas offcanvas-start" id="offcanvas-mobile">
    <div class="offcanvas-body">
      <div class="mobile-menu">
        <a href="index-3.html" class="logo mobile py-3"><img src="assets/images/akaram logo.jpg" alt="logo"
            class="img-fluid"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>

        <ul class="accordion accordion-flush mobile_dropdown" id="accordionFlushExample">
          <li class="accordion-item">
            <h2><a href="index.html">Home</a></h2>
          </li>
          <li class="accordion-item">
            <h2><a href="about.html">About</a></h2>
          </li>
          <li class="accordion-item">
            <h2>
              <button class="accordion-button collapsed p-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsetwo" aria-expanded="false">
                Join Hands
              </button>
            </h2>
            <div id="flush-collapsetwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul>
                  <li><a href="Become-a-blood-donor.html">Become A Blood Donor</a></li>
                  <li><a href="donor-dictionary.html">Donor Dictionary</a></li>
                
                </ul>
              </div>
            </div>
          </li>
          <li class="accordion-item">
            <h2><a href="photo-gallary.html">Gallery</a></h2>
          </li>
          <li class="accordion-item">
            <h2><a href="contact.html">Contact</a></h2>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- right side offcanvas -->
  <div class="offcanvas offcanvas-end right_canvas" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="content-top mb-100">
        <a href="index.html">ASYC</a>
        <p>No.29,Main road,pudupetai, panruti(t.k),cuddalore(d.t)-607 108  </p><br>
        <p>+91 7550359907 | +91 9655115979 | +91 7010881350 </p>
      </div>
      <div class="offcanvus-gallery d-flex align-items-center flex-wrap">
        <a class="img" href="#"><img src="assets/images/awarness/5.JPG" alt="not found"></a>
        <a class="img" href="#"><img src="assets/images/awarness/6.jpg" alt="not found"></a>
        <a class="img" href="#"><img src="assets/images/awarness/7.JPG" alt="not found"></a>
        
      </div>
    
    </div>
  </div>

  <!-- Javascript Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/fancybox.js"></script>
  <script src="assets/js/counterup.min.js"></script>
  <script src="assets/js/progress-bar.js"></script>
  <script src="assets/js/smooth-scroll.min.js"></script>
  <script src="assets/js/nice-select.js"></script>
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/custom-js.js"></script>

</body>



</html>