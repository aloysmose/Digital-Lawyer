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
		

<br><br><br>
<div style="margin: 30px;">


<div id="demo"><br>
  <h1>Add yourself into Lawyers Community.</h1>
  <br><br>

  
  <form class="my-form" role="form" method="post" action="<?php echo site_url('user/home/signuplawyer'); ?>">
						  <div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Lawyer Name" name="lawyer_name" required="required">
						  </div>
						  <div class="form-group">
							<input type="email" name="lawyer_email" class="form-control" id="email" placeholder="Lawyer Email" required="required">
						  </div>
						   <div class="form-group">
							<input type="number" name="lawyer_phone" class="form-control" id="email" placeholder="Lawyer Mobile number" required="required">
						  </div>
						  <div class="form-group">
							<textarea class="form-control" name="lawyer_info" id="message" rows="7" cols="25" style="resize:none;" required="required" placeholder="Lawyer Description"></textarea>
						  </div>
						   <div class="form-group">
							<input type="text" name="lawyer_fees" class="form-control" id="email" placeholder="Lawyer Fees" required="required">
						  </div>
						  <button type="submit" class="btn btn-default btn-block">Enlist as Lawyer</button>
						</form>

  </div>
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  
</div>
<?php $this->load->view('user/footer' );   ?>
