<!DOCTYPE html>
<html lang="en">

<head>

  <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 48px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">

	<!-- Font Awesome -->
	<link href="<?php echo site_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
	
    <!-- Animation -->
	<link href="<?php echo site_url('assets/css/animate.css'); ?>" rel="stylesheet" />
	
    <!-- MyTemplate CSS -->
    <link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet">
	
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

    <header id="header-banner">
        <nav class="navbar navbar-default navbar-fixed-top fadeIn" role="navigation">
            <div class="container">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-box-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="<?php echo site_url(); ?>">Digital Lawyer</a>
                    </div>
                </div>
                
                <!-- Collect the nav links and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
                    
                    <ul class="nav navbar-nav">
                        <li class="" id="askaq"><a>Ask a Question</a></li>
                    
                    <li class=""><a href="<?php echo site_url('user/home/qna'); ?>">Q/A</a></li>

                        <li class="dropdown" role="presentation">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              SERVICES <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu bullet fadeIn" role="menu">


                              <li><a href="<?php echo site_url('user/home/legaladvices' ); ?>">Legal Advices</a></li>
                              <li><a href="<?php echo site_url('user/home/firefir' ); ?>">File Complaint</a></li>
                               <li><a href="<?php echo site_url('user/home/rti' ); ?>">RTI</a></li>
                                <li><a href="<?php echo site_url('user/home/firedetail' ); ?>">Get FIR details</a></li>
                              <li><a href="<?php echo site_url('user/home/acts' ); ?>">Acts</a></li>
                              <li><a href="<?php echo site_url('user/home/hirealawyer' ); ?>">Hire a lawyer</a></li>
							  
                        
                            </ul>

                        </li>
						  <li><a href="<?php echo site_url('user/home/signuplawyer' ); ?>">Enlist as lawyer</a></li>
                            <li><a href="<?php echo site_url('user/home/about'); ?>">About</a></li>
                        <li><a href="#contactus">Contact</a></li>
                    </ul>
                    
                </div>
                
            </div> <!-- /.container -->
        </nav> <!-- /.nav -->
    </header>



