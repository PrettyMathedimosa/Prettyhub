<?php
@include 'config.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    //CHECK if email already exists
    $check_user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email");
    if (mysqli_num_rows($check_user) > 0) {
        echo "email alredy registered";
    } else {
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $query);
        echo "Registration successful";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Paasword" required>
    <button type="submit" name="register">Register</button>
</form>
