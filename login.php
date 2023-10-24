<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

    <style>
       
        <?php
            include 'style.css';
        ?>


    </style>



<body>

<div class="mainbox">
    <div class="fix"></div>
    <h2>Login</h2>


        <form method="post" action="login_process.php">

            <label for="username">Username:</label> <br>

            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label> <br>

            <input type="password" id="password" name="password" required><br><br>

            <div class="subb"><input type="submit" value="Login"></div>
            

            

        </form>
</div>

</body>
</html>
