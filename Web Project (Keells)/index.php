<?php
$con = mysqli_connect("localhost", "root", "", "keells");
if($con){
  echo "";
}
?>
<html>
<head>
  <title>Keells</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
     <header class="header">
       <nav class="navbar navbar-style">
         <div class="container">
           <div class="navbar-header">
           
            <a href=""><img class="logo" src="keellslogo.png"></a>
          </div>
           
           <ul class="nav justify-content-end">
            <li><a class="nav-link" href="#">HOME</a></li>
            <li><a class="nav-link" href="#">ABOUT US</a></li>
            <li><a class="nav-link" href="#">CONTACT US</a></li>
            </ul>
          </div>
         </div>
       </nav>
        
       <div class="container">
       <div class="row">

            <div class="col-sm-6 banner-info">
                 <h1></h1>
                 <p class="big-text">GET! Best Prices For Your Harvest From Keells</p>
                 <p>We like to buy your goods and quality harvest with best prices. 
                   So you can join with us and get a best value to your harvest.
                 </p>
                 <a class="btn btn-first" href="">Login</a>
                 <a class="btn btn-second" href="">Signup</a>
            </div>

            <div class="col-sm-6 banner-image">
              <img class="img-fluid" src="unnamed.jpg" class="float-right">
            </div>
       </div>  
       </div>

       <div id="demo" class="carousel slide" data-ride="carousel">

        
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
      
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Slider 1.jpg" alt="">
          </div>

          <div class="carousel-item">
            <img src="Slider 2.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img src="Slider 3.jpeg" alt="">
          </div>
        </div>
      
       
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      
      </div>
      <br/>
        <h1>Our Reports</h1>
       
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Quantity'],
          <?php
          $sql = "SELECT * FROM homechart";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Stock Vegetables'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
    </script>   

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['category', 'quantity'],
          <?php
          $sql = "SELECT * FROM homechart2";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Need Vegetables'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>  
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Quantity'],
          <?php
          $sql = "SELECT * FROM homechart3";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Stock Fruits'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>   

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Quantity'],
          <?php
          $sql = "SELECT * FROM homechart4";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Need Fruits'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

        chart.draw(data, options);
      }
    </script>   
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <div id="piechart1" style="width: 900px; height: 500px; margin: 0px"></div>
        <div id="piechart2" style="width: 900px; height: 500px; margin-left: 650px; margin-top: -500px"></div>
        <div id="piechart3" style="width: 900px; height: 500px; margin: 0px"></div>
        <div id="piechart4" style="width: 900px; height: 500px; margin-left: 650px; margin-top: -500px"></div>
     </header>
</body>
</html>