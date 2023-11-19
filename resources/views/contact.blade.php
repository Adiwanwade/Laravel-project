<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contacts</title>
</head>
<body>
    @include('layout.navigation')

    <h2 style="padding-bottom: 7px;border-bottom:solid;display:flex;align-items:center;justify-content:center">Contact Details</h2>
    <br>
    <div style=" display: flex;
    align-items: right;
    justify-content: right;">
    <i class="fa fa-bars" id="menu" style="background:#333 ;color:white;  padding: 20px;
        font-size: 30px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;"
        onmouseover="myFunction()"></i>
        <div id="myLinks" style="display: none">
            <i class="fa fa-close" style="font-size:36px;padding:20px" onclick="myFunction()"></i>
        <a href="https://www.facebook.com/ArijitSingh" class="fa fa-facebook" style="
background: #3B5998;
        color: white;
        padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="https://twitter.com/Atmojoarjalojo" class="fa fa-twitter"style="background: #55ACEE;
      color: white;
      padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="https://in.linkedin.com/in/arijit-singh-7b1377b7" class="fa fa-linkedin"style="background: #007bb5;
      color: white;
      padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="https://www.youtube.com/channel/UCtFOW7jJXChfFNoucRFqRmw" class="fa fa-youtube"style=" background: #bb0000;
      color: white;
      padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="https://www.instagram.com/arijitsingh/?hl=en" class="fa fa-instagram"style=" background: #125688;
      color: white;
      padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
  </div>
    </div>
    <ul style="font-size: x-large;font-weight:bold">
        <li >
            Arijit Singh Contact Number: +91 22 26358498 (Talent Management)</li>
 <li>Arijit Singh WhatsApp Number: Not Available</li>
 <li>Office Fax Number: Not Available</li>
 <li>Residence Telephone Number: Not Available</li>
 <li>Residence Fax Number: Not Available</li>
 <li>Mobile Number: Not Available</li>
 <li>Telephone Number: +91 22 26358498</li>

    </ul>
@include('layout.footer')
<script>
    function myFunction() {
      var x = document.getElementById("myLinks");
      var x1=document.getElementById("menu");
      if (x.style.display === "block") {
        x.style.display = "none";
        x1.style.display="block";
      } else {
        x.style.display = "block";
        x1.style.display="none";
      }
    }
    </script>
</body>
</html>
