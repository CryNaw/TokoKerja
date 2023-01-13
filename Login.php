<!DOCTYPE html>
<html>

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-57C6ZZ233V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-57C6ZZ233V');
</script>
    <title>Registration</title>

    <?php
    require 'Header.php'
    ?>

</head>

<style>
    .textbox {
        width: 350px;
        height: 50px;
        border-radius: 5px;

        border-width: thin;
        border-color: round;

        padding-left: 20px;

        margin-top: 10px;
        margin-bottom: 10px;
    }

    .submit {
        width: 350px;
        height: 50px;
        border-radius: 5px;
        color: white;
        background-color: red;

        font-size: 25px;

        border-width: thin;
        border-color: round;

        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<script>

</script>


<body>
    <div class="text-center fontfamily">
        <h1 style="margin-top:30px; font-weight:bold;">Login</h1>
        <form action="LoginCheck.php" method="post">
            <input class="textbox" type="text" placeholder="Enter Your Username" name="email"><br>
            <input class="textbox" type="password" placeholder="Password" name="password"><br>
            <input class="submit bg-success bg-gradient" type="submit" value="Login">
        </form>
        <hr>
        <p style="margin-right:20px;">Not a Member? <a style="margin-left:5px; color:blue;" href="register.php">Sign Up</a></p>
    </div>    
</body>

</html>