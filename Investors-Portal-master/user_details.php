<!DOCTYPE html>
<html>
<head>
  <title>User Details</title>
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
  <div class="w3-container w3-black">
    <h3 class="w3-text-green">Instructions-</h3><br>
    <p>
      <ul>
        <li>Upload the images in .jpeg, jpg or png format.</li>
        <li>Upload all the files in PDF format only.</li>
        <li>Don't Upload multiple Files.</li>
        <li>All the matter must be brief and to the point unless asked to ellborated.</li>
        <li>Make sure all the legal documents are in English only.</li>
        <li>Hover over the Upload button to see which file is selected to upload.</li>
      </ul>
    </p>
    <h5 class="w3-bottombar w3-border-blue"></h5>
  </div>
  <div class="w3-container w3-col.m11 w3-black">
    <form method="post" enctype="multipart/form-data" action="upload.php">
      Official Business Name<br>
      <input type="text" name="business_name" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Business Name"><br>
      Billing Address<br><br>
      Line 1<br>
      <input type="text" name="line1" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Address Line 1"><br>
      Line 2<br>
      <input type="text" name="line2" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Address Line 2"><br>
      Line 3<br>
      <input type="text" name="line3" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Address Line 3"><br>
      City<br>
      <input type="text" name="city" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="City"><br>
      Country<br>
      <input type="text" name="country" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Country"><br>
      Tagline<br>
      <input type="text" name="tagline" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Tagline"><br>
      Company Logo<br><br>
      <label class="fileContainer">
        <i class="fa fa-cloud-upload fa-fw"></i>Upload logo
        <input type="file"/>
      </label><br><br>
      Summary
      <input type="text" name="summary" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Summary"><br>
      Team Info <br><br>
      <label class="fileContainer">
        <i class="fa fa-cloud-upload fa-fw"></i>Upload Team Info
        <input type="file"/>
      </label><br><br>
      Problem Statement <br>
      <input type="text" name="problem" class="w3-input" style="width: 50%;border: 1px solid black;font-weight: bold;" placeholder="Problem Statement"><br>
      Solution <br><br>
      <label class="fileContainer">
        <i class="fa fa-cloud-upload fa-fw"></i>Upload Solution For Problem
        <input type="file"/>
      </label><br><br>
      Marketing Strategy<br><br>
      <label class="fileContainer">
        <i class="fa fa-cloud-upload fa-fw"></i>Upload Marketing Strategy
        <input type="file"/>
      </label><br><br>
      Milestones <br><br>
      <label class="fileContainer">
        <i class="fa fa-cloud-upload fa-fw"></i>Upload Milestones
        <input type="file"/>
      </label><br><br>
      Business Model <br><br>
      <label class="fileContainer">
        <i class="fa fa-cloud-upload fa-fw"></i>Upload Business Model
        <input type="file"/>
      </label><br><br>
      Financing <br><br>
      <label class="fileContainer">
        <i class="fa fa-cloud-upload fa-fw"></i>Upload Financing Strategy
        <input type="file"/>
      </label><br>
      <br>
      Click The submit button to submit all the files<br><br>
      <input type="submit" name="Click Here to Submit" class="w3-button w3-green w3-right"><br><br>
      </form>
    <h5 class="w3-bottombar w3-border-red"></h5>
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