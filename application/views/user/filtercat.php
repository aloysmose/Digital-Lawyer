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

              <h2 style="margin-left:60px;"> <span class="glyphicon glyphicon-search" aria-hidden="true" style="color:#DE4949"></span> <?php echo $q_desc; ?></h2>
<div style="width:100%">


     <div class="dropdown" style="margin-left:60px;margin-bottom:10px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:#de4949;border-color:#de4949">Filter
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
<?php for($i=0;$i<count($lawcat);$i++){ ?>
    <li><a href="<?php echo site_url('user/home/getqbycatid')."?id=".$lawcat[$i]['category_id']; ?>"><?php echo $lawcat[$i]['category_name']; ?></a></li>
   <?php }?>
  </ul>
</div> 


<?php 

for($i=0;$i<count($q_list);$i++)
{?>
<div style="margin-left: 60px;background-color: whitesmoke;width:90%;">
<div style="border:1px solid #DE4949;padding-left:10px;border-radius:5px;margin-bottom:10px !important;">
<strong><?php echo $q_list[$i]['q_desc']; ?></strong>
<p style="color:grey"><?php echo '(Posted by '.$q_list[$i]['posted_by_name']; ?>, <?php echo 'email: '.$q_list[$i]['posted_by_email']; ?>, <?php echo 'Mobile: '.$q_list[$i]['posted_by_phone']; ?>)</p>
<?php if(isset($q_list[$i]['ans'])){ ?>Answer:
	<?php 

for($j=0;$j<count($q_list[$i]['ans']);$j++)
{?>
<p style="height:100px;overflow-y:scroll;text-align:justify;border-top:1px dotted #DE4949;"><?php echo $q_list[$i]['ans'][$j]; ?></p>
<p style="color:grey"><?php echo '(Posted by '.$q_list[$i]['ans_name'][$j]; ?>, <?php echo 'email: '.$q_list[$i]['ans_email'][$j]; ?>, <?php echo 'Mobile: '.$q_list[$i]['ans_phone'][$j]; ?>)</p>
<?php }
} ?>

<br>
<br>
<a href="<?php echo site_url('user/home/ansaq')."?q_id=".$q_list[$i]['q_id']; ?>"><button style="background-color: #DE4949;color:white;font-weight:500; margin-bottom:10px" class="btn btn-sm">Answer</button></a>
</div>
</div>
<?php
} ?>

</div>
<div style="margin-top:30px">
<?php $this->load->view('user/footer' );   ?>
</div>
