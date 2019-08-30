<?php
	//include('server.php');
	require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>BlackBuy || Cart </title>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
   <link rel="shortcut icon" href="../files/assets/images/BBS.jpg" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery.steps/css/jquery.steps.css">
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
                    <a href="product.php">
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
                                    <span>Leon Luthuli</span>
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
                                 
										<li ><a class="btn btn-danger" href="index.php?logout='1'" align="right"><i class="fa fa-sign-in"> Sign Out </i></a></li>	
										</li>
                       </ul>
                </div>
            </div>
        </nav>


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
                                        <a href="privacy-policy.php">
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
									<li class="">
                                        <a href="#">
                                            <span class="pcoded-mtext" >What is Vetting</span>
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
                                                    <h4>Shopping Cart</h4>
                                                    <span>These are the items in your cart</span>
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
                                                    <li class="breadcrumb-item"><a href="#!">Shopping cart</a>
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
                                                <!-- Shopping cart start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Shopping cart</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id="wizard">
                                                                    <section>

                                                                   

                                                                        <form class="wizard-form" id="basic-forms" action="#">
                                                                            <!-- Shopping cart field et start -->
                                                                            <h3> Your Shopping Cart </h3>
                                                                            <fieldset>
                                                                                <table id="e-product-list" class="table table-responsive table-striped dt-responsive nowrap dataTable no-footer dtr-inline cart-page" role="grid" style="width: 100%;">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 125px;">Image</th>
                                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 1023px;">Product Name</th>
                                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 153px;">Amount</th>
                                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Qty</th>
                                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 134px;text-align:center">Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <?php
																			            $GetProductQuery = "SELECT productName,productDesciption,productAmount,productQuantity,productImage FROM `tblproduct`";
																			
																			            $Presults = mysqli_query($con, $GetProductQuery);
																			            while($row=mysqli_fetch_array($Presults))
																			            {
																		            ?>
                                                                                        <tr class="odd">
                                                                                            <td class="pro-list-img" tabindex="0">
                                                                                                <img src="UpLoadedImages/<?php echo $row["productImage"] ?>" class="img-fluid" alt="tbl" >
                                                                                            </td>
                                                                                            
                                                                                            <td class="pro-name">
                                                                                                <h6><?php echo $row["productName"] ?></h6>
                                                                                                <span><?php echo $row["productDesciption"] ?></span>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php echo $row["productAmount"] ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php echo $row["productQuantity"] ?>
                                                                                            </td>
                                                                                            <td class="action-icon text-center">
                                                                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                         <tr class="even">
                                                                                            <td class="pro-list-img" tabindex="0">
                                                                                                <img src="../files/assets/images/product/pro/p1.jpg" class="img-fluid" alt="tbl">
                                                                                            </td>
                                                                                            <td class="pro-name">
                                                                                                <h6> Style Womens Shoes </h6>
                                                                                                <span>High-heel formal shoes with beadwork design</span>
                                                                                            </td>
                                                                                            <td>R689</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" value="1">
                                                                                            </td>
                                                                                            <td class="action-icon text-center">
                                                                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="odd">
                                                                                            <td class="pro-list-img" tabindex="0">
                                                                                                <img src="../files/assets/images/product/pro/p8.jpg" class="img-fluid" alt="tbl">
                                                                                            </td>
                                                                                            <td class="pro-name">
                                                                                                <h6> Unisex Socks </h6>
                                                                                                <span>Stylish skinny socks. All sizes available.</span>
                                                                                            </td>
                                                                                            <td>R755</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" value="2">
                                                                                            </td>
                                                                                            <td class="action-icon text-center">
                                                                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="even">
                                                                                            <td class="pro-list-img" tabindex="0">
                                                                                                <img src="../files/assets/images/product/pro/p29.jpg" class="img-fluid" alt="tbl">
                                                                                            </td>
                                                                                            <td class="pro-name">
                                                                                                <h6> Unisex Watch </h6>
                                                                                                <span>Stunning time piece made of 100% Cow skin.</span>
                                                                                            </td>
                                                                                            <td>R989</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" value="2">
                                                                                            </td>
                                                                                            <td class="action-icon text-center">
                                                                                                <a href="#!" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody> 
                                                                                    <?php
																			        }
																			        ?>
                                                                                </table>
                                                                       
                                                                            </fieldset>
                                                                            <!-- Shopping cart fieldset end -->
																			
                                                                            <!-- Delivery Details fieldset start -->
                                                                            <h3> Delivery Details </h3>
                                                                            <fieldset class="bank-detail p-t-5">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="card-number" class="form-label">First name *</label>
                                                                                                    <input id="name-2" name="name" type="text" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="card-number" class="form-label">Last name *</label>
                                                                                                    <input id="surname-2" name="surname" type="text" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="card-number" class="form-label">Select Country</label>
                                                                                                    <select class="form-control required">
                                                                            <option>Select Country</option>
                                                                            <option>South Africa</option>
                                                                            <option>Zimbabwe</option>
                                                                            <option>Mozambique</option>
                                                                            <option>Nigeria</option>
                                                                            <option>Swaziland</option>
                                                                        </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="address" class="form-label">Address *</label>
                                                                                                    <input id="address" name="address" type="text" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="city" class="form-label">City *</label>
                                                                                                    <input id="city" name="city" type="text" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="phone-2" class="form-label">Phone #</label>
                                                                                                    <input id="phone-2" name="phone" type="number" class="form-control phone">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="email" class="form-label">Email #</label>
                                                                                                    <input id="email" name="email" type="email" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group row">
                                                                                                    <label for="date" class="form-label">Date Of Birth</label>
                                                                                                    <input id="date" name="Date Of Birth" type="text" class="form-control date-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </fieldset>
                                                                            <!-- Delivery Details fieldset end -->
                                                                            <!-- Payment Details fieldset start -->
                                                                            <h3> Payment Details </h3>
                                                                            <fieldset class="bank-detail">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="input-group">
                                                                                                    <select id="hello-single" class="form-control">
                                                                <option value="">---- Select card ----</option>
                                                                <option value="married">Visa</option>
                                                                <option value="unmarried">Master</option>
                                                                <option value="married">American Express</option>
                                                                <option value="unmarried">Discover</option>
                                                            </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="card-number" class="form-label">Card number</label>
                                                                                                    <input id="card-number" class="form-control" type="text" name="card_number">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <label for="expdate-month" class="form-label">Expiration date</label>
                                                                                                <div class="row gutter-xs">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="input-group">
                                                                                                            <select id="expdate-month" class="form-control" name="expdate_month">
                                                                        <option value="" selected="selected">Month</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                        <option value="5">05</option>
                                                                        <option value="6">06</option>
                                                                        <option value="7">07</option>
                                                                        <option value="8">08</option>
                                                                        <option value="9">09</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <select id="expdate-year" class="form-control" name="expdate_year">
                                                                        <option value="" selected="selected">Year</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2023">2023</option>
                                                                        <option value="2024">2024</option>
                                                                        <option value="2025">2025</option>
                                                                        <option value="2026">2026</option>
                                                                        <option value="2027">2027</option>
                                                                        <option value="2028">2028</option>
                                                                        <option value="2029">2029</option>
                                                                        <option value="2030">2030</option>
                                                                        <option value="2031">2031</option>
                                                                        <option value="2032">2032</option>
                                                                        <option value="2033">2033</option>
                                                                        <option value="2034">2034</option>
                                                                        <option value="2035">2035</option>
                                                                        <option value="2036">2036</option>
                                                                    </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-5 offset-md-1">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="cvv2-number" class="form-label">Card Security Code</label>
                                                                                                            <input id="cvv2-number" class="form-control" type="text" name="cvv2_number">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="promotional-code" class="control-label">Promotional code</label>
                                                                                                    <input id="promotional-code" class="form-control" type="text" name="promotional_code">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <!-- Payment Details fieldset end -->
                                                                            <!-- Confirmation fieldset start -->
                                                                            <h3> Confirmation </h3>
                                                                            <fieldset>
                                                                                <div class="confirmation">
                                                                                    <div class="text-primary m-b-20">
                                                                                        <div class="icon icon-check icon-5x"></div>
                                                                                    </div>
                                                                                    <div class="confirmation-content text-center">
                                                                                        <h3>Congratulations! Your Order is accepted.</h3>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 offset-md-3">
                                                                                                <p>
                                                                                                    A tracking code will be sent to your inbox.Use this tracking code to keep track of your delivery. We advise you keep this code safe until your purchase has arrived.
                                                                                                </p>
                                                                                                <button class="btn btn-primary m-y">Track Order</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <!-- Confirmation fieldset start -->
                                                                        </form>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Shopping cart start -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
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
</div>

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
        <!--Forms - Wizard js-->
        <script src="../files/bower_components/jquery.cookie/js/jquery.cookie.js"></script>
        <script src="../files/bower_components/jquery.steps/js/jquery.steps.js"></script>
        <script src="../files/bower_components/jquery-validation/js/jquery.validate.js"></script>
        <!-- Validation js -->
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <script type="text/javascript" src="../files/assets/pages/form-validation/validate.js"></script>
        <!-- i18next.min.js -->
        <script type="text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
        <script type="text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
        <!-- Custom js -->
        <script src="../files/assets/pages/forms-wizard-validation/form-wizard.js"></script>

        <script src="../files/assets/js/pcoded.min.js"></script>
        <script src="../files/assets/js/vartical-layout.min.js"></script>
        <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
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


<!-- Mirrored from colorlib.com//polygon/adminty/default/product-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Nov 2018 12:11:16 GMT -->
</html>
