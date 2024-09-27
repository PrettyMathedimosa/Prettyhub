
<!DOCTYPE html>
<html>
    <head>
        <title>my account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!--css style sheet-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <style>
       .border{
        width:500px;
        height:400px;
    }
    body{
        /*background-color:green;*/
    }
    </style>
    <body>
    <h1><!--<a href="index.php">-->M Beauty & Fashion</a></h1>
    <div class="container mt-3 " >
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark dropdown" data-bs-toggle ="dropdown">Menu</button>
                        <ul class="dropdown-menu">
                            <li><a class ="dropdown-item" href="index.php">Home</a></li>
                            <li><a class ="dropdown-item" href="sign-up.php">Sign-in</a></li>
                            <li><a class ="dropdown-item" href="Log-in.php">Log-in</a></li>
                            <li><a class ="dropdown-item" href="Admin_sign.php">Admin</a></li>



                        </ul>
          
   
                    </div> 
</div>
       <!--The form-->
        <form action="signDB.php" method="post" class="was-validated">
            <div class="container border border bg-white">
            <div class="mb-3 mt-3 container">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Enter your email"> 
                <div class ="valid-feedback">Valid.</div> 
                <div class="invalid-feedback">Please use your correct email</div>
            </div>

            <div class="mb-3 container"> 
                <label for="password1">Password</label>
                <input type="password" name="paswd" id="paswd" placeholder="Create your password"
                required minlength="8" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title ="must contain at least one number,one uppercase letter,one lowercase letter,and at least 8 characters.">
                <div class ="valid-feedback">Valid.</div> 
                <div class="invalid-feedback">must contain at least one number,one uppercase letter,one lowercase letter,and at least 8 characters.</div>
            </div>

            <div class="mb-3 container"> 
                <label for="Pasword2" class="form-label">Confirm Pasword</label>
                <input type="password" class="form-input" name="Confirmpwd" id="paswd" placeholder="Create your password" required>
                <div class="invalid-feedback">Your password must be the same with the above password</div>
            </div>


            <div class="form-check mb-3 container">
                <label for="check">
                    <input class="form-check-input"  type="checkbox" name="check" > Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            </div>
           
        </form>  
        <p>Sign up as a client <a href="client.php">Click here!</a></p>
        <p>Already regestered? <a href="log-in.php">go here!</a></p>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>