<!DOCTYPE html>
   <html lang="en">
    <meta charset="utf-8">
    <head>
         <title> sign in </title>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar bg-dark navbar-dark justify-content-center">
            <div class ="container">
                <a class="navbar-brand" href="#"> sign in page </a>
                <ul class="navbar-nav flex-row justify-content-between" style="width:600px;">
                   <li class="nav-items"><a class="nav-link" href="#">Home</a></li>
                   <li class="nav-items"><a class="nav-link" href="#">Signin</a></li>
                   <li class="nav-items"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </nav>

        <form action="form">
            <div class="mb-3 mt-5">
                <label for="email " class="form-label">Email</label>
                <input type="email" class="form-comtrol" name='Email' placeholder="Enter your email">
            </div>

            <div class="mb-3 ">
                <label for="password " >Password</label>
                <input type="password"  name="passw" id ="paswd" placeholder="Enter your password">
            </div>

            <div class="form-check mb-3 ">
                <label for="check " >
                <input  class="form-check-input" type="checkbox" name="check"> Remember me
                </label>
            </div>

            <button type="submit" class="btn-primary">Submit</button>
        </form>






    </body>
    </html>