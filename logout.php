<?php
unset($_SESSION['login']['email']);
unset($_SESSION['login']['password']);

echo "<script>window.location='Login.php';</script>";
