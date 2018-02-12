<?php
session_start();
$sname=$_SESSION['nam'];
$conn = new mysqli('localhost','root','','test') or die("Not Connecting");
$q="SELECT * FROM stats WHERE sname='$sname'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="ourcss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.fileContainer {
    overflow: hidden;
    position: relative;
    padding: 15px;
}
.fileContainer:hover{
  background-color: red;
}

.fileContainer [type=file] {
    cursor: pointer;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    border: 1px solid red;
}</style>
</head>
<body class="w3-white">
  <!-- Top Bar -->
  <div class="w3-bar w3-top w3-blue-grey w3-large" style="z-index:4">
    <span class="w3-bar-item w3-left"><b><a class="w3-bar-item  w3-padding">INVESTORS'S PORTAL</a></b></span>
    <span class="w3-bar-item w3-right"><a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-remove fa-fw"></i>  Logout</a></span>
  </div>

  <!-- Main -->
<div class="w3-main" style="margin-top:43px;"">
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-user fa-fw"></i> User Details</b></h5>
  </header>
  <div class="w3-container w3-col.m11 w3-black">
    <br>
    <br>
    <p>
      Meetings:  <?php echo $row['meeting'];?>
    </p><br>
    <br>
    <br>
    <p>
      Views:  <?php echo $row['views'];?>
    </p><br>
    <br>
    <br>
    <p>
      Shares:  <?php echo $row['shares'];?>
    </p><br>
    <br>
    <br>
    <p>
      Product Reached:  <?php echo $row['prod_reach'];?>
    </p><br>
    <br>
    <br>
    <p>
      Investors:  <?php echo $row['investor'];?>
    </p><br>
    <br>
    <br>
    <p>
      Investments:  <?php echo $row['invest_made'];?>
    </p><br>
    <br>
    <br>
    <p>
      Possible Investors:  <?php echo $row['investor_poss'];?>
    </p><br>
    <br>
    <br>
    <p>
      Deals On Table:  <?php echo $row['deals'];?>
    </p><br>
    <br>
    <br>
    <p>
      Users:  <?php echo $row['users'];?>
    </p><br>
    <br>
    <br>
    <p>
      Daily Active Users:  <?php echo $row['active'];?>
    </p><br>
    <br>
    <span><h3 class="w3-button w3-xlarge w3-orange w3-center">Click Here To Update The Above Stats <i class="fa fa-arrow-up"></i></h3></span>
    <h5 class="w3-bottombar w3-border-blue"></h5>
  </div>
  <footer class="w3-container w3-padding-32 w3-black w3-center">
  <h4>Find us on</h4>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
  <h5>Disclamer-</h5><h6> We only act as an agent to find potential starups for Investors and we are not responsible for any deal cancellation or alteration.<br>
  Our reach to the marketing targets are subject to the market climate and may not be 100% accurate.<br>
  Pricing of the plans we offer may get infalted.</h6>
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Go to TOP</a>
</footer>
</div>

</body>
</html>