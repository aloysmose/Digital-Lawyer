<?php $this->load->view('user/header' );   ?>
<?php 
                $error = '';
                $error = validation_errors();
              if(isset($error) && $error!='' ){  ?>
                <div class="alert alert-danger" style="margin-top:5%">
                    <strong>Wrong Credentials!</strong>
                    <?php echo validation_errors(); ?>
                </div>
                <?php } ?>

     
          <?php if(isset($errormsg) && $errormsg!=''){  ?>
                <div class="alert alert-danger" style="margin-top:5%">
                    
                    <?php echo $errormsg; ?>
                </div>
                <?php } ?>

		<?php if(isset($message)){  ?><div class='alert alert-success' style="margin-top:5%">
                    <?php  echo $message;   ?>
                </div>
                <?php } ?> 
		
        <!-- banner -->
    <section class="banner" id="home">
        <div class="container">
            <div class="slogan">
                <h2>Digital Lawyer </h2>
                <h4>Your Digital Lawyer that advice you on any legal advicesory.</h4>
            </div>

            <div style="padding:20px;">
           <center> <form method="post" action="<?php echo site_url('user/home/search' ); ?>">
            <input type="text" placeholder="Need Any Legal Advice or Answers?" name="search" autofocus="autofocus" autocomplete="on" style="padding-left:1%;
	padding-right:1%;
	position:relative;
	padding-top:5px;
	font-size:130%;
	width:75%;
	height:13%;
	font-family:arial;
	border:0.3;

 border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);">
            <input type="submit" value="search" style="background-color: white;color:#DE4949;font-weight:500;margin-bottom:5px" class="btn btn-sm">
            </form></center>
            </div>
            <div class="btn-circle-scroll fadeIn">
                <a href="#section-footer" class="btn-circle">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
            
        </div>
    </section>
    <!-- /.banner -->

	<!-- aboutus -->
    <section class="aboutus" id="aboutus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h2>About Us</h2> 
					</div>
					<div class="col-sm-7">
						<p>
						This website is basically a typical digital lawyer that guides you in your query according to Indian Law and Order. It provides you with services like Community page, Law-order awareness, digitally file FIR, RTI filing, hiring a lawyer and legal advise. Searching your query helps in obtaining appropriate and helpful laws from Indian constituion. Law-order awareness is a programme to increase the familiarity of each an every individual's rights and laws. You can directly file an FIR or an RTI application from here. Community page helps people and lawyers to share their experiences and question an individual's problem					
						</p>

					</div>
					<div class="col-sm-5">
						<div class="img-aboutus">
							<div class="wow fadeIn" data-wow-delay="0.2s">
								<img src="<?php echo site_url('assets/img/aboutus.jpg'); ?>" alt="" class="img-responsive img-rounded" />
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- /.aboutus -->
	
	<!-- services -->
    <section class="services" id="services">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h2>Our Services</h2>
					</div>
				</div>				
			</div>
			
			<div class="row-padded" id="first"></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-7">
						<h4>Legal Advice</h4>
						<p>
						This website provides all the details about legal advises like criminal, labour and service, properties, muslim, check bounce, divorce, customer, tax etc. 
						</p>
						<h4>File Complaint</h4>
						<p>
						This website provides essential details about any query and proper guidelines from constitution. Based on the provided information, you can directly file a complaint to police station from here. 
						</p>
						<h4>Get FIR Details</h4>
						<p>
						You can get FIR(First Investigation Report details) from here by filling an online application.All you require is Name of district, Police station name, FIR inquiry no., name of complaint, From and To date of FIR.
						</p>
					</div>
					
					<div class="col-sm-5">
						<div class="avatar">
							<div class="wow fadeIn" data-wow-delay="0.2s">
							<img src="<?php echo site_url('assets/img/services/1.jpg'); ?>" alt="" class="img-responsive img-rounded" />
							</div>
						</div>
					</div>
				</div>				
			</div>
			
			<div class="row-padded" id="second"></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-7">
						<h4>Law-Order Awareness</h4>
						<p>This program is to familiarize citizens of India with Indian law and order. This task will be carried out by subscribing to automatically generating weekly e-mails and by following Digital lawyer on social media platform.

						</p>
						<h4>Acts</h4>
						<p>
						A list of various Acts and laws of the parliament and Indian Constitution is provided in this section. To simplify the navigating process, you can always search from the search bar provided at home page.  
						</p>
						<h4>Hire a lawyer</h4>
						<p>
						This website also provides services like consulting a lawyer, get second opinion from them and share your experiences on community  page. You can hire a lawyer from here based on the requirements.
						</p>
						<h4>Q/A</h4>
						<p>
						This community page helps in connecting people and consulting lawyers on open basis where everyone can ask questions and get the answer from the 
						experts And also anyone can see the question-answer of others.
						</p>
					
					</div>
					
					<div class="col-sm-5">
						<div class="avatar">
							<div class="wow fadeIn" data-wow-delay="0.2s">
							<img src="<?php echo site_url('assets/img/services/2.jpg'); ?>" alt="" class="img-responsive img-rounded" />
							</div>
						</div>
					</div>
				</div>				
			</div>
			
			
		
		</div>
	</section>
	<!-- /.services -->
	<?php $this->load->view('user/footer' );   ?>