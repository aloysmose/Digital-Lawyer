<!DOCTYPE html>
<html lang="en">

<head>
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
                        <a href="<?php echo site_url('admin/home/'); ?>">Digital Lawyer</a>
                    </div>
                </div>
                
                <!-- Collect the nav links and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
                    
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('admin/home'); ?>">All Laws</a></li>
                    
                    
                            <li><a href="<?php echo site_url('admin/home/allq'); ?>">Questions</a></li>
                        <li><a href="<?php echo site_url('admin/home/allans'); ?>">Answers</a></li>

                          
                        <li><a href="<?php echo site_url('admin/home/feedback'); ?>">Feedback List</a></li>

                         <li><a href="<?php echo site_url('admin/home/laywerslist'); ?>">Lawyers</a></li>
                        
                           <li><a href="<?php echo site_url('admin/home/lawcat'); ?>">Law categories</a></li>


                           <li><a href="<?php echo site_url('admin/home/sublist'); ?>">Subscribers List</a></li>
                    </ul>
                    
                </div>
                
            </div> <!-- /.container -->
        </nav> <!-- /.nav -->
    </header>

<br><br><br>

                