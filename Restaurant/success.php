<?php
session_start();
echo "payment successful";
unset($_SESSION['cart']);
?>