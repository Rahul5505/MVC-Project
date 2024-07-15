<?php
  //session_start();
        $mainurl="http://localhost/E-parking/";
        $baseurl="http://localhost/E-parking/assets/";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="#" class="logo">
            <?php if(isset($_SESSION["id"])){?>
            <h4>Welcome:<span><?php echo ucwords($_SESSION["username"]); ?></span></h4>
              <?php }else{?>
                <h4>RK<span>Parking</span></h4>
              <?php } ?>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?php echo $mainurl; ?>" >Home</a></li>
              <li class="scroll-to-section "><a href="<?php echo $mainurl; ?>about">About Us</a></li>
              <li class="scroll-to-section"><a href="<?php echo $mainurl; ?>parkingslot">Parking Slot</a></li>
              <?php if(isset($_SESSION["id"])){ ?>
              <li class="scroll-to-section"><a href="<?php echo $mainurl; ?>manageslot?=<?php echo $_SESSION['id']; ?>">View Slot</a></li>
                            <?php } ?>
              <?php if(!isset($_SESSION["id"])) { ?>
                <li class="scroll-to-section"><a href="<?php echo $mainurl; ?>rate">Booking Rate</a></li>
              <li class="scroll-to-section"><a href="<?php echo $mainurl; ?>register">Register</a></li>
              <li class="scroll-to-section"><a href="<?php echo $mainurl; ?>login">Login</a></li> 
              <?php }else{ ?>
                <li class="scroll-to-section"><a href="<?php echo $mainurl; ?>?logout-here">Logout</a></li>
                <?php } ?>
              <li class="scroll-to-section"><div class="main-red-button"><a href="<?php echo $mainurl; ?>search">Search Slot</a></div></li> 
               
            </ul>
                    
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
