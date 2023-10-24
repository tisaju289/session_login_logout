<?php
session_start();


        $users = [
            'user1' => 'password1',
            'user2' => 'password2',
            'user3' => 'password3',
        ];


        $username = $_POST['username'];
        $password = $_POST['password'];


        if (array_key_exists($username, $users) && $users[$username] === $password) {
            // Authentication successful
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
        } else {
            // Authentication failed
        echo "Invalid user name and password <a href='login.php'>try again</a>";
        }
?>
