<!DOCTYPE html>
<html>
    <head>
       <title>Registration</title>

       <?php
            require 'Header.php'
       ?>

    </head>    

    <style>
        .text{
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
        <div class="Row text-center fontfamily">
    
            <h1 style="margin-top:30px; font-weight:bold;">Register</h1>
            <form action="registercheck.php" method="post">
                <input class="text" type="text" placeholder="Enter Your Email" name="email"><br>
                <input class="text" type="text" placeholder="Password" name="password"><br>
                <input class="submit" type="submit" value="Register"> 
            </form>
            
        </div>
    </body>
</html>
