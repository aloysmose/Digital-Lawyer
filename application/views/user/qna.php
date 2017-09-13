<?php $this->load->view('user/header' );   ?>
<br><br><br>
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
                

<div class="row">
    


    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="margin-left:10px;">

     <div class="dropdown" style="float:right;margin:10px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:#de4949;border-color:#de4949">Filter
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
<?php for($i=0;$i<count($lawcat);$i++){ ?>
    <li><a href="<?php echo site_url('user/home/getqbycatid')."?id=".$lawcat[$i]['category_id']; ?>"><?php echo $lawcat[$i]['category_name']; ?></a></li>
   <?php }?>
  </ul>
</div> 
    <?php 

    for($i=0;$i<count($qns);$i++)
    {?>
        <div style="margin-top:60px;margin-left:10px;margin-bottom:10px;">
            <div style="border:1px solid #DE4949;padding-left:10px;border-radius:5px">
                <strong><?php echo ($i+1)."] ".$qns[$i]['q_desc']; ?></strong>
                <a href="<?php echo site_url('user/home/ansaq')."?q_id=".$qns[$i]['q_id']; ?>"><button style="float:right;margin:5px;background-color: #DE4949;color:white;font-weight:500" class="btn btn-sm">Answer</button></a>

                <p style="color:grey"><?php echo '(Posted by '.$qns[$i]['posted_by_name']; ?>, <?php echo 'email: '.$qns[$i]['posted_by_email']; ?>, <?php echo 'Mobile: '.$qns[$i]['posted_by_phone']; ?>)</p>
                <?php if(isset($qns[$i]['ans'])){ ?>Answer:
	            <?php 

                for($j=0;$j<count($qns[$i]['ans']);$j++)
                {?>
                <p style="height:100px;overflow-y:scroll;text-align:justify;border-top:1px dotted #DE4949;"><?php echo ($j+1)." reply] ".$qns[$i]['ans'][$j]; ?></p>
                <p style="color:grey"><?php echo '(Posted by '.$qns[$i]['ans_name'][$j]; ?>, <?php echo 'email: '.$qns[$i]['ans_email'][$j]; ?>, <?php echo 'Mobile: '.$qns[$i]['ans_phone'][$j]; ?>)</p>
                <?php }} ?>        
            </div>
        </div>


    
        <?php
    } ?>
    </div>

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-left: 40px" >

 
   
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

</div>

<?php $this->load->view('user/footer' );   ?>
