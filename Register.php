<!DOCTYPE html>
<html>

<head>
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
  <div class="row justify-content-center">
    <div class="text-center">
      <h1 style="margin-top:30px; font-weight:bold;">Register</h1>
      <form action="RegisterCheck.php" method="post">
        <input class="textbox" type="email" placeholder="Enter Your Username" name="email"><br>
        <input class="textbox" type="text" placeholder="Password" name="password"><br>
        <input class="submit bg-success bg-gradient" type="submit" value="Register">
      </form>
      <hr>
      <p style="margin-right:20px;">Already a Member?<a style="margin-left:5px; color:blue;" href="Login.php">Login</a></p>
    </div>
  </div>  

</body>

</html>