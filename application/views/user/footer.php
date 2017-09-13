	<!-- contact us -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.city {display:none}
</style>


<div class="w3-container" >



<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue" style="background-color:#de4949 !important "> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright" style="background-color:#de4949 !important ;font-size: 20px !important;">&times;</span>
   <h3>Subscribe to get aware of Legal Information</h3>

  </header>


  <div class="form-group" style="width:60%;margin:5px">
  <form method="post" action="http://digitallawyer.epizy.com/user/home/getintouch">
  <input type="email" required name="email" class="form-control" id="usr" placeholder="Enter Your Email" style="margin-top:15px;">
</div>
<button type="submit" class="btn btn-default" style="margin:5px">Submit</button>
</form>
  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-btn w3-right w3-white w3-border" 
   onclick="document.getElementById('id01').style.display='none'">Close</button>

  </div>

 </div>
</div>

</div>
	<section class="contactus" id="contactus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h2>Contact Us</h2>
					</div>
					<div class="col-sm-8">
						<form class="my-form" role="form" method="post" action="<?php echo site_url('user/home/contactus'); ?>">
						  <div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name" name="name">
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="Email" name="email">
						  </div>
						  
						  <div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Subject" name="subject">
						  </div>
						  
						  <div class="form-group">
							<textarea class="form-control" name="message" id="message" rows="7" cols="25" style="resize:none;" required="required" placeholder="Message"></textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-default btn-block">SEND MESSAGE</button>
						</form>
					</div>
					
					<div class="col-sm-4">
						<div class="physical-address">
						<h4>Main Office</h4>
				
						<address>
						  <strong>L.D. College Of Engineering</strong><br>
						  near Gujarat University<br>
						  Navrangpura,Ahmedabad,Gujarat<br>
						  <abbr title="Phone">Mobile: </abbr> 7623072273<br>
						   <abbr title="Phone">Phone: </abbr> 079 2630 6752
						</address>

						<address>
						  <strong>Email</strong><br>
						  <a href="mailto:roshanrawal43@gmail.com">digital_lawyer@gmail.com</a>
						</address>	
						<address>
						  <strong>Follow Us on</strong><br>
							<div class="wow fadeIn" data-wow-delay="0.1s">
							<ul class="company-social">
								<li class="social-facebook"><a href="https://www.facebook.com/legalservicesind/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="https://twitter.com/indialegalmedia?lang=en" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-twitter"><a href="http://mashable.com/2015/10/15/india-instagram-accounts/#sxDs4uRLluqS" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
								<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" style="background-color: #de4949 !important;color:white;padding: 10px;border:0px" id="sub">subscribe</button>
							</ul>
							</div>
						</address>	
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- /.contact us -->
	<!-- footer -->
	<footer id="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow fadeIn" data-wow-delay="0.4s">
						<div class="btn-circle-scroll">
							<a href="#header-banner" class="btn-circle">
								<i class="fa fa-angle-double-up animated"></i>
							</a>
						</div>
					</div>
					<p>&copy;&nbspCopyright 2017 - DigitalLawyer.epizy.com. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>
	<!-- /.footer -->
	
	
	<!-- Core JavaScript Files -->
	<script src="<?php echo site_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/jquery.easing.min.js'); ?>"></script>	
	<script src="<?php echo site_url('assets/js/jquery.scrollTo.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/wow.min.js'); ?>"></script>			<!-- Reveal animation when you scroll by wow.js. It need animate.css library -->
	<!-- Custom Theme JavaScript -->
	<script src="js/custom.js"></script>

</body>

</html>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<h2>Ask Your Question</h2><br>

<form class="my-form" role="form" method="post" action="<?php echo site_url('user/home/qna'); ?>">
						  <div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name" name="posted_by_name" required="required">
						  </div>
						  <div class="form-group">
							<input type="email" name="posted_by_email" class="form-control" id="email" placeholder="Email" required="required">
						  </div>
						   <div class="form-group">
							<input type="number" name="posted_by_phone" class="form-control" id="email" placeholder="Mobile number" required="required">
						  </div>
 <div class="dropdown">

<select name="category_id" id="status_category" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="width:100%;text-align:left;margin-bottom:5px;background-color:white;color:gray;border-color:gray">
  
  <ul class="dropdown-menu" style="width:100%">
<li><option value="">Select Category</option></li>
<?php for($i=0;$i<count($lawcat);$i++){ ?>
			<li><option value="<?php echo $lawcat[$i]['category_id']; ?>"><?php echo $lawcat[$i]['category_name']; ?></option></li>
    
  <?php } ?>
  </ul>
</div> <br><br>
						  <div class="form-group">
							<textarea class="form-control" name="q_desc" id="message" rows="7" cols="25" style="resize:none;" required="required" placeholder="Your Question"></textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-default btn-block">Ask</button>
						</form>

  </div>




<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>


<script>
// Get the modal
var modal = document.getElementById('myModal');


// Get the button that opens the modal
var btn = document.getElementById("askaq");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>



