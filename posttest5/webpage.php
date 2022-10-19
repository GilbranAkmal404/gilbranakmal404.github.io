<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItemKu by Gilbran</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

    
</head>
<body>
    <nav>
        <div class="header">
            <img src="https://files.itemku.com/illustration/itemku/brand-identity/itemku-logo-white-example.png" alt="itemku" width="200px">
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="aboutme.php">About me</a></li>
                    <li><a href="index.php">Log Out</a></li>
                    <li><a href="read.php">CRUD</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <ul><li><button onclick="dark()" class="button button1">Dark Mode</button></li>
        <li><button onclick="pink()" class="button2 button3">Pink Mode</button></li>
        <li><button onclick="red()" class="button4 button5">Red Mode</button></li>
        <script>
          var button = document.getElementsByClassName("button button1 button2 button3 button4 button5");
          button.addEventListener("click", dark);
          button.addEventListener("click", pink);
          button.addEventListener("click", red);

          function dark() {
              var dark = document.body;
              dark.classList.toggle("dark-mode");
              alert ("Klik Oke! untuk masuk Darkmode dan Klik Oke! lagi untuk kembali seperti semula");
          }

          function pink() {
              var pink = document.body;
              pink.classList.toggle("pink-mode");
              alert ("Klik Oke! untuk masuk Pink Mode dan Klik Oke! lagi untuk kembali seperti semula");
          }

          function red() {
              var red = document.body;
              red.classList.toggle("red-mode");
              alert ("Klik Oke! untuk masuk Red mode dan Klik Oke! lagi untuk kembali seperti semula");
          }
        </script>

    </ul>

</div>
    
    <div class="container">
        <div class="iklan"></div>
        <section id="home">
            <img src="https://d1x91p7vw3vuq8.cloudfront.net/placeholder/202291/0hlqkdawiy56knhk0l7dp9.png" alt="itemku" width="500px" class="center">
        </section>
    </div>

   <div class="container">
    <div class="card" style="width: 18rem; float: left; margin: 40px;">
        <img src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png" width="250px" class="card-img-top" alt="valorant logo">
        <div class="card-body">
            <h5 class="card-title">Valorant Point</h5>
            <p class="card-text">Rp 75.000</p>
            <a href="#" class="btn btn-danger">Samarinda</a>
        </div>
    </div>
     
    <div class="card" style="width: 18rem; float: left; margin: 40px;">
        <img src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png" width="250px" class="card-img-top" alt="valorant logo">
        <div class="card-body">
            <h5 class="card-title">Valorant Point</h5>
            <p class="card-text">Rp 80.000</p>
            <a href="#" class="btn btn-danger">Samarinda</a>
        </div>
    </div>
     
    <div class="card" style="width: 18rem; float: left; margin: 40px;">
        <img src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png" width="250px" class="card-img-top" alt="valorant logo">
        <div class="card-body">
            <h5 class="card-title">Valorant Point</h5>
            <p class="card-text">Rp 87.000</p>
            <a href="#" class="btn btn-danger">Samarinda</a>
        </div>
    </div>
     
    <div class="card" style="width: 18rem; float: left; margin: 40px;">
        <img src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png" width="250px" class="card-img-top" alt="valorant logo">
        <div class="card-body">
            <h5 class="card-title">Valorant Point</h5>
            <p class="card-text">Rp 90.000</p>
            <a href="#" class="btn btn-danger">Samarinda</a>
        </div>
    </div>
     

</div>
    <footer>
        <p>@Copyright 2022 - by Gilbran Akmal</p>
    </footer>
        
</body>
</html>