<header style="background-image:url('personality-image.jpg')">
    <h1 style="display: flex;
    align-items: left;
    justify-content: left;">Famous Personality</h1>
    {{-- <img src="" alt="Personality Image"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div style=" display: flex;
    align-items: right;
    justify-content: right;">
    <i class="fa fa-bars" style="background:#333 ;color:white;  padding: 20px;
        font-size: 30px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;"
        onmouseover="myFunction()"></i>
        <div id="myLinks" style="display: none">
        <a href="#" class="fa fa-facebook" style="
background: #3B5998;
        color: white;
        padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="#" class="fa fa-twitter"style="background: #55ACEE;
      color: white;
      padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="#" class="fa fa-linkedin"style="background: #007bb5;
      color: white;
      padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="#" class="fa fa-youtube"style=" background: #bb0000;
      color: white;
      padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;"></a>
      <a href="#" class="fa fa-instagram"style=" background: #125688;
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
    <script>
        function myFunction() {
          var x = document.getElementById("myLinks");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>
</header>
