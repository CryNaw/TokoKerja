<!DOCTYPE html>
<html>
    <head>
       <title>Registration</title>

       <?php
            require 'Header-index.php'
       ?>

    </head>    

    <style>
        .textbox{
            width: 350px;
            height: 50px;
            border-radius: 5px;

            border-width: thin; 
            border-color: round;
            
            padding-left:20px;

            margin-top:10px;
            margin-bottom:10px;
        }

        .submit{
            width: 350px;
            height: 50px;
            border-radius: 5px;
            color:white;
            background-color: red;

            font-size:25px;

            border-width: thin; 
            border-color: round;

            margin-top:10px;
            margin-bottom:10px;
        }
    </style>

    <script>
        
    </script>


    <body>
        <div class="text-center fontfamily">
            <h1 style="margin-top:30px; font-weight:bold;">Login</h1>
            <form action="logincheck.php" method="post">
                <input class="textbox" type="email" placeholder="Enter Your Email" name="email"><br>
                <input class="textbox" type="text" placeholder="Password" name="password"><br>
                <input class="submit" type="submit" value="Login"> 
            </form>
            <hr>
        <p style="margin-right:20px;">Not a Member? <a style="margin-left:5px; color:red;" href="register.php">Sign Up</a></p> 
        </div>
        

    </body>
</html>