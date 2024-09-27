<?php
session_start();
@include 'config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email";
    $results = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($results);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('LOcation: index.php');
    } else {
        echo "invalid email or password";
    }
}
?>


<form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Login</button>
</form>