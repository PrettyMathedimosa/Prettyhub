<?php
$con = mysqli_connect("localhost","root","","image");

if(isset($_POST['upload'])){
    $file = $_FILES['image']['name']

    $query = "INSERT INTO upload(image) VALUES('$file')";
    $RES = mysqli_query($con,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    }
}






?>





<!DOCTYPE html>
   <html lang="en">
    <meta charset="utf-8">
    <head>
         <title> Personal Portfolio    </title>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div  class="container">
            <div  class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center">UPLOAD IMAGE</h3>
                        <form class="my-5" method="post" enctype="multipart/form-data">
                            <input type="file" name="image" class="form-control">
                            <input type="submit" name="upload" value="UPLOAD" class="btn btn-success my-3">

                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-center">DISPLAY IMAGE</h4>

                        <?php
                            $sel = "SELECT * FROM upload";
                            $que = mysqli_query($con,$sel);

                            $output ="";

                            if(mysqli_num_rows($que) < 1){
                                $output = "h5 class='tetx-center'>No image uploaded</h5>";
                            }

                            while($row = mysqli_fetch_array($que)){
                                $output = "<img src='" $row['image'] "'class='my-3'
                                     style='width:400px;height:400px;'>"
                            }
                        ?>

                    </div>

                </div>

            </div>
       
        </div>
            


    </body>
   </html>