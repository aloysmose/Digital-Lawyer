
<style type="text/css">
	
	input[type=email], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit]{
    background-color: #de4949;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}
	.button {
		margin-left:20px;
		background-color: #9DC45F;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-border-border-radius: 5px;
		border: none;
		padding: 10px 25px 10px 25px;
		color: #FFF;
		text-shadow: 1px 1px 1px #949494;
	}
	.button:hover {
	    background-color:#80A24A;
	}
	.alert-danger {
		color: #b94a48;
		margin-top:10%;

		background-color: #f2dede;
		border-color: #ebccd1;
	
	}
	.alert-success {
		color: #468847;
		background-color: #dff0d8;
		border-color: #d6e9c6;
	}
</style>

	<?php 
                $error = '';
                $error = validation_errors();
              if(isset($error) && $error!='' ){  ?>
                <div class="alert alert-danger">
                    <strong>Wrong Credentials!</strong>
                    <?php echo validation_errors(); ?>
                </div>
                <?php } ?>

     
          <?php if(isset($errormsg) && $errormsg!=''){  ?>
                <div class="alert alert-danger">
                    
                    <?php echo $errormsg; ?>
                </div>
                <?php } ?>

		<?php if(isset($message)){  ?><div class='alert alert-success'>
                    <?php  echo $message;   ?>
                </div>
                <?php } ?> 
		

<?php $this->load->view('admin/header' );   ?>
	<br><br><br><br><br><br>
	<center><div style="padding:10px;margin:10px;">
	<h2>Admin Login</h2>
	<form method="post" action="<?php echo site_url('admin/home/login'); ?>">

<input type="email" name="email" placeholder="Email"><br>

<input type="Password" name="password" placeholder="Password"><br>
<input type="submit" value="login">
	</form>

	</div></center><br><br><br><br>
