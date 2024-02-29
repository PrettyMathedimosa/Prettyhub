<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0,shrink-to-fit-no">
        <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
        <title> Date and Time</title>
</head>
<body>
        <div class ="row">
          <div class="col-md-8 offset-md-2">
             <div class="card">
                <div class="card-header bg">
                        <h1>Display Date and Time in Php</h1>
                </div>
                  <div class="card-body">
                     <?php date_default_timezone_set('Asia/Mamila');?>

                     <h1>current date :<?php echo date('y-m-d');?></h1>

                     <h1>current time :<?php echo time('h:i:s  a');?></h1>

                  </div>

             </div>

          </div>


        </div>

        <script>
             let time = document.getElementById("current-timr");

             setInterval(() =>{
                let d = new Date();
                time.innerHTML = d.toLocaleTimeString();
             }

             )
        </script>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>


        <?php

          echo date("1");   // Thursday
          echo "<br/>";

          echo date("m");   // 11
          echo "<br/>";

          echo date("M");   // Nov
          echo "<br/>";

          echo date("F");   // November
          echo "<br/>";

          echo date("Y");   // 2024
          echo "<br/>";

          echo date("y");   // 29
          echo "<br/>";

          echo date("d/m/Y  h:i:s A");
          echo date("d-m-Y h:i:s A")   
          echo "<br/>";

          echo time();




        ?>





</body>
</html>