<?php
Session_start();
session_destroy();

echo "<script>window.location='Login.php';</script>";
