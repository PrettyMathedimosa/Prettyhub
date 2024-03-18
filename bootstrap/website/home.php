<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['id']))

?>


<!DOCTYPE html>
   <html lang="en">
    <meta charset="utf-8">
    <head>
         <title> Home page   </title>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container d-flex justify-content-center
         align-items-center"
         style="min-height:100vh">

         <?php if($_SESSION['role'] == 'admin'){
           //for admin
           <div class ="card" style="width:15rem;">
           <div class ="card-body">
           <h2 class="card-title"> Card title
               <?=$_SESSION['name']?>
           </h2>
           <p class="card-text">some card text and make up the bulk of the card content</p>

           <a href="logout.php" class="btn btn-primary">Logout</a>
           </div>
           </div>

         }
         ?>
         <div class="p-3">
         <h5 class="display-4 fs-1">Members</h5>
         <table class="table">
           <thead>
           <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">User name</th>
            <th scope="col">Role</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
               </tr>
             </tbody>
                </table>
                </div>


         <h1> Hello World </h1>
    </div>

</body>
</html>