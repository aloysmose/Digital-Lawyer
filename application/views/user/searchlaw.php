<?php $this->load->view('user/header' );   ?>
<div class="w3-container" style="margin-top:10%;">
  <h3>Different types of laws</h3> <div style="float:left"><form action="<?php echo site_url('user/home/searchlaw' ); ?>" method="post"><input required style="float:left" type="text" name="searchlaw" ><input type="submit" value="Search Advice" style="background-color: #de4949;color:white;padding: 5px;border:0px;margin-left:5px"></form></div>

</div>
<hr>

<div class="w3-container">

</div>
<?php if(count($lows)>0)
{?>
  <div class="w3-row-padding">

 
    <div class="w3-col s4" style="width:100%;padding:30px;margin:10px;">
     <h2><?php echo $query. "  related Legal Advices and Laws";?></h2><hr>
	 
	 <?php 
 for($j=0;$j<count($lows);$j++)
	 {?>
	<a href="<?php echo site_url('user/home/detailview')."?law_id=".$lows[$j]['law_id']; ?>"><p><?php echo $lows[$j]['law_name']; ?></p></a>
	<?php }  ?>
    </div>

  </div>
<?php }else{?><h3>Sorry! data not found realted to your search criteria, try different phrases.</h3><?php } ?>
<?php $this->load->view('user/footer' );   ?>