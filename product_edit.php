<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com//polygon/adminty/default/product-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Nov 2018 12:11:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head> 
    <title>BlackBuy || Product Edit </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
 <link rel="icon" href="../files/assets/images/BBS.jpg" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- star theme css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/bars-1to10.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/bars-horizontal.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/bars-movie.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/bars-pill.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/bars-reversed.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/bars-square.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/css-stars.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
      <!-- jquery file upload Frame work -->
	 <link href="../files/assets/pages/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="../files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
	
	<!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">


        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="index.php">
                        <img class="img-fluid" src="../files/assets/images/BBS.jpg" alt="BlackBuy-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
						
                                    
                           <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                  <!--  <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">-->
                                    <span>Guest User</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                   <li ><a class="btn btn-danger" href="product.php?logout='1'" align="right"><i class="fa fa-sign-in"> Sign Out </i></a></li>	
                                 </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-chevron-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                    </a>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="feather icon-navigation"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                   <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">BlackBuy Shelf</div>
                           <ul class="pcoded-item pcoded-left-item">
                             <li class="pcoded-hasmenu active pcoded-trigger">
                                 <a href="index.php">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Shelf</span>
                                </a>
								 <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-mtext" >Food Court</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-mtext" >Events</span>
                                                </a>
                                            </li>
                                           <li class=" ">
                                        <a href="#">
                                            <span class="pcoded-mtext" >Fashion</span>
                                        </a>
                                    </li>
                                   <li class=" ">
                                        <a href="#">
                                            <span class="pcoded-mtext" >Equipment</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#" target="">
                                            <span class="pcoded-mtext">Bulk Buy</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#" target="">
                                            <span class="pcoded-mtext">Hair & Skin care</span>
                                        </a>
                                    </li> 
									 <li class=" ">
                                        <a href="#" target="">
                                            <span class="pcoded-mtext">Art's & Crafts</span>
                                        </a>
                                    </li>
                                      <li class=" ">
                                        <a href="#" target="">
                                            <span class="pcoded-mtext">Policies</span>
                                        </a>
                                    </li>
									<li class=" ">
                                        <a href="#" target="">
                                            <span class="pcoded-mtext">Manufacture</span>
                                        </a>
                                    </li>
                                        
                           </ul>
                             
                            </li>
							<div class="pcoded-navigatio-lavel">BlackBuy Vetting</div>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext" >Vetting System</span>
                                </a>
                                <ul class="pcoded-submenu">
                                  <li class="active">
                                        <a href="privacy_policy.php">
                                            <span class="pcoded-mtext" >BlackBuy Terms of Use</span>
                                        </a>
                                    </li>
									<li class="">
                                        <a href="product_edit.php">
                                            <span class="pcoded-mtext" >Vet my Item</span>
                                        </a>
                                    </li>
                                   <li class="">
                                        <a href="product_list.php">
                                            <span class="pcoded-mtext" >Vetted Items</span>
                                        </a>
                                    </li> 

                                </ul>
                            </li>
                        </ul>
                 
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>Product Edit</h4>
                                                    <span>Edit your item details</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="product.php"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">E-Commerce</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Product Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->


                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Product edit card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product Edit</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="product-edit">
                                                                    <ul class="nav nav-tabs nav-justified md-tabs " role="tablist">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link active" data-toggle="tab" href="#home7" role="tab">
                                                                                <div class="f-20">
                                                                                    <i class="icofont icofont-edit"></i>
                                                                                </div>
                                                                                Product Edit</a>
                                                                            <div class="slide"></div>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-toggle="tab" href="#profile7" role="tab">
                                                                                <div class="f-20">
                                                                                    <i class="icofont icofont-document-search"></i>
                                                                                </div>
                                                                                Company Edit</a>
                                                                            <div class="slide"></div>
                                                                        </li>
                                                                    </ul>
                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane active" id="home7" role="tabpanel">
                                                                            <form class="md-float-material card-block" method="post" action="product_edit.php"  enctype="multipart/form-data">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-ui-user"></i></span>
                                                                                            <input type="text" name ="psName" class="form-control" placeholder="Product/Service Name" required >
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-code"></i></span>
                                                                                            <input type="text" name="pCode" class="form-control" placeholder="Product Code" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
																				
                                                                                <div class="row">
																					 <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                                            <input type="text" name="psDescription" class="form-control" placeholder="Product/Service Description" required>
                                                                                        </div>
                                                                                    </div>
																			
                                                                                    <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-cur-dollar"></i></span>
                                                                                            <input type="text" name="pPrice" class="form-control" placeholder="Price" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
																				
																				
																				 <div class="row">
                                                                                   <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-numbered"></i></span>
                                                                                            <input type="text" name="pQuantity" class="form-control" placeholder="Quantity" required>
                                                                                        </div>
                                                                                    </div>
                                                                                  <div class="col-sm-6">
                                                                                        <select name="pCategory" class="form-control form-control-primary"  required>
																							<option value="" >Select A Category</option>
																							<option value="opt0" >Categories</option>
																							<option value="opt1">Fashion</option>
																							<option value="opt2">Manufacture</option>
																							<option value="opt3">Services</option>
																							<option value="opt4">Bulk Supplies</option>
																						</select>
                                                                                    </div>
                                                                                </div>
																				
																				
																				 <div class="row">
                                                                                   <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-numbered"></i></span>
                                                                                            <input type="file" name="image" class="form-control" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
																				
																				
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="text-center m-t-20">
                                                                                            <button type="submit" name="SaveProduct" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                                                                            <button type="submit" class="btn btn-warning waves-effect waves-light">Discard</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="tab-pane" id="profile7" role="tabpanel">
                                                                            <form class="md-float-material card-block" method="post" action="product_edit.php">
                                                                               	 <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-align-left"></i></span>
                                                                                            <input type="text" name="companyName" class="form-control" placeholder="Brand/Company Name" required>
                                                                                        </div>
                                                                                    </div>
																					<div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                                            <input type="text" name="TimeInOperation" class="form-control" placeholder="Time in Operation" required>
                                                                                        </div>
                                                                                    </div>
                                                                                   
                                                                                </div>    <div class="row">
                                                                                   
                                                                                    <div class="col-sm-6">
                                                                                        <select name="companyCategory" class="form-control form-control-primary" required>
																							<option value="">Select Categories</option>
																							<option value="opt1">Clothing</option>
																							<option value="opt2">Shoes</option>
																							<option value="opt3">Underwear</option>
																							<option value="opt4">Shoes</option>
																						</select>
                                                                                    </div>
                                                                                
                                                                                    <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-ui-note"></i></span>
                                                                                            <input type="text" name="TaxNumber" class="form-control" placeholder="Tax Number" required>
                                                                                        </div>
                                                                                    </div>
																					
                                                                                </div>
                                                                                <div class="row">
                                                                                  <div class="col-sm-6">
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                                            <input type="text" name="companyNumber" class="form-control" placeholder="Number of Directors" required>
                                                                                        </div>
                                                                                   </div>
                                                                                    <div class="col-sm-6">
                                                                                        <select name="BEElevel" class="form-control form-control-primary" required>
																							<option value="">BEE Level</option>
																							<option value="opt2">2</option>
																							<option value="opt3">3</option>
																							<option value="opt4">4</option>
																							<option value="opt5">5</option>
																							<option value="opt6">6</option>
																						</select>
                                                                                    </div> 
                                                                                </div>
                                                                            
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="text-center m-t-20">
                                                                                            <button type="submit" name="SaveCompany" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                                                                            <button type="button" class="btn btn-warning waves-effect waves-light">Discard</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="tab-pane" id="messages7" role="tabpanel">
                                                                            <div class="md-float-material card-block">
                                                                                <div class="row p-t-10 p-b-10">
                                                                                    <div class="col-lg-9 col-md-6 col-sm-12">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                
                            
       
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                       </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product edit card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- barrating js -->
    <script type="text/javascript" src="../files/bower_components/jquery-bar-rating/js/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="../files/assets/pages/rating/rating.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vartical-layout.min.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../files/assets/js/script.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>


<!-- Mirrored from colorlib.com//polygon/adminty/default/product-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Nov 2018 12:11:08 GMT -->
</html>
