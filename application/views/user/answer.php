<?php $this->load->view('user/header' );   ?>


		
    
	<!-- /.services -->

	<div style="padding:10px;margin:50px 10px;">
<h2><?php echo $q_data[0]['q_desc']; ?></h2>
	<form class="my-form" role="form" method="post" action="<?php echo site_url('user/home/ansaq'); ?>">
						  <div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name" name="answer_by_name" required="required">
						  </div>
						  <input type"text" name="q_id" style="display:none" value="<?php echo $q_data[0]['q_id']; ?>">
						  <div class="form-group">
							<input type="email" name="answer_by_email" class="form-control" id="email" placeholder="Email" required="required">
						  </div>
						   <div class="form-group">
							<input type="number" name="answer_by_phone" class="form-control" id="email" placeholder="Mobile number" required="required">
						  </div>
						  <div class="form-group">
							<textarea class="form-control" name="ans_desc" id="message" rows="7" cols="25" style="resize:none;" required="required" placeholder="Your Answer"></textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-default btn-block">Answer</button>
						</form>
		</div>
	<?php $this->load->view('user/footer' );   ?>