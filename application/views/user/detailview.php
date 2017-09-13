<?php $this->load->view('user/header' );   ?>
<br><br><br>
<!-- aboutus -->
    <section class="aboutus" id="aboutus" >
		<div class="container">
			<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h2><?php echo $lawyers[0]['law_name']; ?></h2> 
					</div>
					<div class="col-sm-7" style="width:100%" >
						<p>
							<?php echo $lawyers[0]['low_description']; ?>
						</p>
						
					</div>
				
				</div>				
			</div>
		</div>
	</section>
	<!-- /.aboutus -->
<?php $this->load->view('user/footer' );   ?>