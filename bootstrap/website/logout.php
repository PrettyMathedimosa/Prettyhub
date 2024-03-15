<?php

sesssion_start();

sesssion_unset();
session_destroy();

header("Location: index.php");

?>