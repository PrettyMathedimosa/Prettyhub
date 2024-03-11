<!DOCTYPE html>
<html>
    <head>
        <title> multi-user role-based-login-system </title>
    </head>
<body>
    <div class="container d-flex justify-content-center
         align-items-center"
         style="min-height:100vh">
        <form class="border shadow p-3 rounded"
               style="width:450px;">
               <h1 class="text-center p-3">LOGIN</h1>
            <div class="mb-3">
                <label for="username"
                       class="form-label">Username</label>
                <input type="text"
                       class="form-control"
                       name="username"
                       id="username">
            </div>
            <div class="mb-3">
                <label for="password"
                       class="form-label">Password</label>
                <input type="text
                       class="form-control"
                       name="password"
                       id="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Select User Type:</label>
            </div>

            <select class="form-select mb-3"
                    aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>

            </select>
            <button type="submit" class="btn btn-primary">Submit</button>

           
        </form>

    </div>
</body>
</html>