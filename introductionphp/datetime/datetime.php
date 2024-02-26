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

                     <h1>current time :<?php echo time('h:i:s');?></h1>


                  </div>

             </div>

          </div>


        </div>




</body>
</html>