
<?php
	//include('server.php');
	require_once('connection.php');
	
	// //Delete Item
	// if (isset($_GET["delete"]) && isset($_GET["id"])){
	//  $id = $_GET["id"];
	//  $query="DELETE FROM `tblproduct` WHERE productId = '$id' ";
	//  if(mysqli_query($con, $query)){
	// 	 header('location: product_list.php');
	//  }
	// }
?>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>BlackBuy || Product Details </title>
	
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
 <link rel="icon" href="../files/assets/images/BBS.jpg" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
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
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/slick-carousel/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/slick-carousel/css/slick-theme.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
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
                                        <li>
                                        <a href="product_cart.php">
                                            <i class="feather icon-log-out"></i> View Cart
                                        </a>
										</li>
                                 <li>
                                        <a href="profile.php">
                                            <i class="feather icon-log-out"></i> Profile
                                        </a>
										</li>
                               <li>
                                        <a href="settings.php">
                                            <i class="feather icon-log-out"></i> Setting
                                        </a>
										</li>
                                 
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
                                                    <h4>Product detail</h4>
                                                    <span>Details of your item</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="product.php"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Products</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Product Detail</a>
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
                                            <div class="col-md-12">
                                                <!-- Product detail page start -->
                                                <div class="card product-detail-page">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-lg-5 col-xs-12">
                                                                <div class="port_details_all_img row">
                                                                    <div class="col-lg-12 m-b-15">
                                                                        <div id="big_banner">
                                                                        <?php
                                                                        if (isset($_GET['id']))
                                                                        {
                                                                            $id=$_GET['id'];
                                                                         //You select statement where id = that get id
                                                                             $GetProductQuery ="SELECT productImage,productName,productAmount,productDesciption,productCode FROM tblproduct where productId=$id";

                                                                        //$GetProductQuery ="SELECT productImage,productName,productAmount,productDesciption,productCode FROM tblproduct where productId=(SELECT productId from (SELECT productId, productImage,productName,productAmount,productDesciption,productCode FROM tblproduct GROUP BY productId DESC LIMIT 1) AS KHOZA)";
                                                                           
																			$Presults = mysqli_query($con, $GetProductQuery);
																			while($row=mysqli_fetch_array($Presults))
																			{
																		?>
																		 
																			
                                                                           <div class="port_big_img">
                                                                                <img class="img img-fluid" src="UpLoadedImages/<?php echo $row["productImage"]?>" alt="Big_ Details">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 product-right">
                                                                        <div id="small_banner">
                                                                            <div>
                                                                                <img class="img img-fluid" src="../files/assets/images/product_detail/p1.jpg" alt="small-details">
                                                                            </div>
                                                                            <div>
                                                                                <img class="img img-fluid" src="../files/assets/images/product_detail/p29.jpg" alt="small-details">
                                                                            </div>
                                                                            <div>
                                                                                <img class="img img-fluid" src="../files/assets/images/product_detail/p11.jpg" alt="small-details">
                                                                            </div>
                                                                            <div>
                                                                                <img class="img img-fluid" src="../files/assets/images/product_detail/p5.png" alt="small-details">
                                                                            </div>
                                                                            <div>
                                                                                <img class="img img-fluid" src="../files/assets/images/product_detail/p5.jpg" alt="small-details">
                                                                            </div>
                                                                            <div>
                                                                                <img class="img img-fluid" src="../files/assets/images/product_detail/p6.jpg" alt="small-details">
                                                                            </div>
                                                                            <div>
                                                                                <img class="img img-fluid" src="../files/assets/images/product_detail/p7.jpg" alt="small-details">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7 col-xs-12 product_detail" id="product_detail">
                                                                <div class="row">
                                                                    <div>
                                                                        <div class="col-lg-12">
                                                                            <span class="txt-muted d-inline-block">Product Code: <a href="#!"><?php echo $row["productCode"] ?></a> </span>
                                                                            <span class="f-right">Availablity : <a href="#!"> In Stock </a> </span>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <h4 class="pro-desc"><?php echo $row["productName"] ?></h4>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <span class="txt-muted"> Brand : Type </span>
                                                                        </div>
                                                                        <div class="stars stars-example-css m-t-15 detail-stars col-lg-12">
																		
                                                                            <div class="j-wrapper j-wrapper-640">
                                                                              <label class="j-label">Product quality</label>
                                                                              <input id="4q" type="radio" name="product_rating" checked="yes" value="20%">
                                                                               <label for="4q">
                                                                                <i class="icofont icofont-star"></i>
                                                                               </label>

                                                                                <input id="4q" type="radio" name="product_rating" value="40%">
                                                                               <label for="4q">
                                                                                <i class="icofont icofont-star"></i>
                                                                               </label>
                                                                               
                                                                               <input id="3q" type="radio" name="product_rating" value="60%">
                                                                                  <label for="3q">
                                                                                <i class="icofont icofont-star"></i>
                                                                                  </label>

                                                                                <input id="2q" type="radio" name="product_rating"  value="80%">
                                                                                  <label for="2q">
                                                                                <i class="icofont icofont-star"></i>
                                                                                  </label>

                                                                                <input id="1q" type="radio" name="product_rating" value="100%">
                                                                                  <label for="1q">
                                                                                <i class="icofont icofont-star"></i>
                                                                                  </label>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>
																		 
                                                                        <div class="col-lg-12">
                                                                            <span class="text-primary product-price"><i class="icofont icofont-cur-dollar"></i><?php echo $row["productAmount"] ?></span> <span class="done-task txt-muted">R90.59</span>
                                                                            <hr>
                                                                            <p><?php echo $row["productDesciption"] ?>
                                                                            </p>
                                                                            <hr>
                                                                            <h6 class="f-16 f-w-600 m-t-10 m-b-10">Quantity</h6>
                                                                        </div>
                                                                        <div class="col-xl-3 col-sm-12">
                                                                            <div class="p-l-0 m-b-25">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-btn">
                                                                                        <button type="button" class="btn btn-default btn-number shadow-none btn-sm" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                                            <span class="icofont icofont-minus m-0"></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quant[1]" class="form-control input-number text-center" value="1">
                                                                                    <span class="input-group-btn">
                                                                                        <button type="button" class="btn btn-default btn-number shadow-none btn-sm" data-type="plus" data-field="quant[1]">
                                                                                            <span class="icofont icofont-plus m-0"></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12 col-sm-12 mob-product-btn">
                                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-20">
                                                                                <i class="icofont icofont-cart-alt f-16" name="ADD"></i><span class="m-l-10">ADD TO CART</span>
                                                                                <a href="product_cart"></a>
                                                                            </button></a>
                                                                            <button type="button" class="btn btn-outline-primary waves-effect waves-light m-r-20" data-toggle="tooltip" title="Add to wishlist">
                                                                                <i class="icofont icofont-heart-alt f-16 m-0"></i>
                                                                            </button>
                                                                            <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-toggle="tooltip" title="Quick view">
                                                                                <i class="icofont icofont-eye-alt f-16 m-0"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <?php
                                                                            }
                                                                        }

                                                                        if(isset($_POST['ADD']))
                                                                            $id=$_GET['id'];
                                                                            $SQL ="SELECT productId,productName,productCode,productAmount FROM tblproduct where productID=$id";
                                                                            $Cresults = mysqli_query($con, $SQL);
                                                                            if(mysqli_num_rows($Cresults) > 0){
                                                                                $SQLs = "INSERT INTO `order`(productName,productCode,productAmount) 
                                                                                SELECT productName,productQuantity,productAmount FROM tblproduct where productID=$id";
                                                                                  	$succesCResults = mysqli_query($con, $SQLs);	
                                                                                      if($succesCResults){
                                                                                          echo "Successfully registered";
                                                                                      }else{
                                                                                          //Error Here
                                                                                          echo "Error", mysqli_error($con);
                                                                                      }  
                                                                            }
                                                                            else
                                                                            {
                                                                                //Error Here
                                                                                echo "Error", mysqli_error($con);
                                                                            }
																			?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product detail page end -->
                                            </div>
                                        </div>
                                        <!-- Nav tabs start-->
                                        <div class="card product-detail-page">
                                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description" role="tab">Description</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item m-b-0">
                                                    <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#review" role="tab">Reviews</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item m-b-0">
                                                    <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#sizeguide" role="tab">Sizing Guide</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item m-b-0">
                                                    <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#about" role="tab">About seller</a>
                                                    <div class="slide"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Nav tabs start-->

                                        <!-- Nav tabs card start-->
                                        <div class="card">
                                            <div class="card-block">
                                                <!-- Tab panes -->
                                                <div class="tab-content bg-white">
                                                    <div class="tab-pane active" id="description" role="tabpanel">
                                                        <p>This section is for the description of the item being sold.</p>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="col-lg-2">Fabric</td>
                                                                    <td class="col-lg-10">Midi</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Color</td>
                                                                    <td class="col-lg-10">Polyester</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Sleevs</td>
                                                                    <td class="col-lg-10">Multi</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Style</td>
                                                                    <td class="col-lg-10">Coloured</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Neck</td>
                                                                    <td class="col-lg-10">Full</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Wash</td>
                                                                    <td class="col-lg-10">Sleevs</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="tab-pane" id="review" role="tabpanel">
                                                       <!-- Review Product card start -->
                                                <div class="card">
                                                    <div class="card-header">

                                                        <h5>Review Our Product</h5>
                                                        <span>Tell what you think about our products and services</span>
                                                        <table>
                                                        <?php
                                                        if (isset($_GET['id']))
                                                        {
                                                            $id=$_GET['id'];
                                                            $GetProductQuery ="SELECT * FROM reviews where productId=$id";

                                                            $GetProductQuery = "SELECT * FROM `reviews`";
                                                                    $Presults = mysqli_query($con, $GetProductQuery);
																			while($row=mysqli_fetch_array($Presults))
																			{
																		?>
                                                                       
                                                                                <tr>
                                                                                    <td>
                                                                                        <?php echo $row["email"] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <?php echo $row["REVIEW"] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <?php echo $row["PRODUCT_RATING"] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <?php echo $row["FirstName"] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                    <script>
                                                                                        localStorage.setItem('productId',<?php echo $id?>);
                                                                                    </script>
                                                                                    
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                            }
                                                                        }
																			?>
                                                                        </table>



                                                    </div>                         
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form action="server.php" method="post" class="j-pro" id="j-pro" novalidate>
                                                                <div class="j-content">
                                                                    <!-- start name -->
                                                                    <div class="j-unit">
                                                                        <label class="j-label">Name</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="name">
                                                        <i class="icofont icofont-user"></i>
                                                    </label>
                                                                            <input type="text" id="name" name="name" placeholder="e.g. Joe Doe">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end name -->
                                                                    <!-- start email-->
                                                                    <div class="j-unit">
                                                                        <label class="j-label">Email</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="email">
                                                        <i class="icofont icofont-envelope"></i>
                                                    </label>
                                                                            <input type="email" placeholder="email@domain.com" id="email" name="email">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end email -->
                                                                    <!-- start message -->
                                                                    <div class="j-unit">
                                                                        <label class="j-label">Review message</label>
                                                                        <div class="j-input">
                                                                            <textarea placeholder="message..." spellcheck="false" name="message"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end message -->
                                                                    <div class="j-divider j-gap-bottom-25"></div>
                                                                    <!-- start ratings -->
                                                                    <div class="j-unit">
                                                                        <div class="j-rating-group">
                                                                            <label class="j-label">Rate this item</label>
                                                                            
                                                                              <div class="j-ratings">

                                                                              <input id="4q" type="radio" name="product_rating" checked="yes" value="20">
                                                                               <label for="4q">
                                                                                <i class="icofont icofont-star"></i>
                                                                               </label>

                                        
                                                                              <input id="4q" type="radio" name="product_rating" value="40">
                                                                               <label for="4q">
                                                                                <i class="icofont icofont-star"></i>
                                                                               </label>
                                                                               
                                                                               <input id="3q" type="radio" name="product_rating" value="60">
                                                                                  <label for="3q">
                                                                                <i class="icofont icofont-star"></i>
                                                                                  </label>
                                                                                  
                                                                                <input id="2q" type="radio" name="product_rating"  value="80">
                                                                                  <label for="2q">
                                                                                <i class="icofont icofont-star"></i>
                                                                                  </label>
                                                                                  
                                                                                <input id="1q" type="radio" name="product_rating" value="100">
                                                                                  <label for="1q">
                                                                                <i class="icofont icofont-star"></i>
                                                                                  </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                            <!-- <script>
                                                             
                                                                                function getRating(x){
                                                                                    if(document.getElementById("1q").value = checked){
                                                                                        x=25;
                                                                                    }else if(document.getElementById("2q").value = checked){
                                                                                        x=50;
                                                                                    }else if(document.getElementById("3q").value = checked){
                                                                                        x=75;
                                                                                    }if(document.getElementById("4q").value = checked){
                                                                                        x=100;
                                                                                    }else{
                                                                                        echo "Did not rate!";
                                                                                    }
                                                                                }
                                                                            </script> -->
                                                                       
                                                                    <!-- end ratings -->
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button name="send" type="submit" class="btn btn-primary">Send</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Review Product card end -->
                                                    </div>
                                                    <div class="tab-pane" id="sizeguide" role="tabpanel">
                                                        <p>This section specifies the sizing guide for your item.</p>
                                                    </div>
                                                    <div class="tab-pane" id="about" role="tabpanel">
                                                        <p>This section will contain information about the seller of the item.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Nav tabs card end-->
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
    <!-- slick js -->
    <script type="text/javascript" src="../files/bower_components/slick-carousel/js/slick.min.js"></script>
    <!-- product detail js -->
    <script type="text/javascript" src="../files/assets/pages/product_detail/product_detail.js"></script>
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


<!-- Mirrored from colorlib.com//polygon/adminty/default/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Nov 2018 12:11:16 GMT -->
</html>
