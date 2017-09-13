<?php $this->load->view('user/header' );   ?>
<div class="w3-container" style="margin-top:10%;">
  <h3>Different types of Legal Advices</h3> <div style="float:left"><form action="<?php echo site_url('user/home/searchlaw' ); ?>" method="post"><input required style="float:left" type="text" name="searchlaw" ><input type="submit" value="Search Advice" style="background-color: #de4949;color:white;padding: 3px;margin-left:5px;border:0px;padding:5px;"></form></div>

</div>
<hr>

<div class="w3-container" style="padding:5px;">

</div>

  <div class="w3-row-padding" style="margin:5px;">

  <?php 
  //echo "<pre>";
 //print_r();die;
  for($i=0;$i<count($law_cat);$i++){ 
  
  if(count($law_cat[$i]['lows'])>0){?>
    <div class="w3-col s4" style="padding:5px 5px;">
     <h4><?php echo $law_cat[$i]['category_name'];?></h4><hr>
	 
	 <?php 
	if(isset($law_cat[$i]['lows'])){ for($j=0;$j<count($law_cat[$i]['lows']);$j++)
	 {?>
	<a href="<?php echo site_url('user/home/detailview')."?law_id=".$law_cat[$i]['lows'][$j]['law_id']; ?>"><p><?php echo $law_cat[$i]['lows'][$j]['law_name']; ?></p></a>
	<?php } } ?>
    </div>
  <?php } }?>
  </div>

<?php $this->load->view('user/footer' );   ?>