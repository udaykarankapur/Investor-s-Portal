<?php
session_start();
$conn=new mysqli('localhost','root','','test') or die('Not Connecting');
$sname=$_SESSION['sname'];
$q="SELECT * FROM stats WHERE sname='$sname'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="ourcss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-white">

<!-- Top container -->
<div class="w3-bar w3-top w3-blue-grey w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><b>INVESTORS'S PORTAL</b></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION['name'];?></strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#Overview" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Overview</a>
    <a href="#Weekly" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>  Weekly Stats</a>
    <a href="#Stats" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Investment Stats</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-remove fa-fw"></i>  Logout</a>
    <a href="setting.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom" id="Overview">
    <div class="w3-quarter">
      <div class="w3-container w3-light-grey w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $row['meeting'];?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Meetings Scheduled</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue-grey w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $row['views'];?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Views</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-dark-grey w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $row['shares'];?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shares</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-black w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $row['prod_reach'];?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Product Reached</h4>
      </div>
    </div>
  </div>

  
  <hr>
  <div class="w3-container w3-black" id="Weekly">
    <h5>General Stats In Percentage Increased</h5>
    <p>New Investors</p>
    <div class="w3-black">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">25%</div>
    </div>

    <p>Product Reached</p>
    <div class="w3-black">
      <div class="w3-container w3-center w3-padding w3-red" style="width:50%">50%</div>
    </div>

    <p>Startup Profile Viewed</p>
    <div class="w3-black">
      <div class="w3-container w3-center w3-padding w3-blue" style="width:99%">99%</div>
    </div>

    <div class="w3-black" style="height: 20px;">
      
    </div>
  </div>
  <hr>

  <br>
  <div class="w3-container w3-black w3-padding-32" id="Stats">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Investments</h5>
        <p>Investors <?php echo $row['investor'];?></p>
        <p>Investment Made $<?php echo $row['invest_made'];?></p>
        <p>Prime Investor Belgian Logistics Pvt. Ltd.</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">New Investments Stats</h5>
        <p>Possible Investors <?php echo $row['investor_poss'];?></p>
        <p>Deals on table <?php echo $row['deals'];?></p>
        <p>Last Investment <?php echo $row['last_investment'];?> days ago </p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-blue">Target</h5>
        <p>Users <?php echo $row['users'];?></p>
        <p>Active <?php echo $row['active'];?></p>
        <p>Interests <?php echo $row['interests'];?>+</p>
      </div>
    </div>
  </div>
  <hr>

  <!-- Footer -->
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-black w3-center">
  <h4>Find us on</h4>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
  <h5>Disclamer-</h5><h6> We only act as an agent to find potential startups for Investors and we are not responsible for any deal cancellation or alteration.<br>
  Our reach to the marketing targets are subject to the market climate and may not be 100% accurate.<br>
  Pricing of the plans we offer may get infalted.</h6>
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Go to TOP</a>
</footer>
  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
