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
           <h2 class="card-title"> Card title</h2>
           <p class="card-text">some card text and make up the bulk of the card content</p>
           </div>
           </div>
         }
         ?>

         <h1> Hello World </h1>
    </div>

</body>
</html>